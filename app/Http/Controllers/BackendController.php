<?php

namespace App\Http\Controllers;

use App\Post_category;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Category;
use App\Post;
use App\Customer;
use Image;
use File;
use Illuminate\Support\Facades\Storage;
use App\Slide;
use App\Http\Requests\SlideRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function user(){
        $users = \App\User::all();
        return view('admin.user',compact('users'));
    }

    public function roleAssign(Request $request){
        //var_dump(dd($request->all()));
        $user = User::where('id',$request['id'])->first();
        $user->roles()->detach();
        
        if(($request['role_user']))
        {
            $user->roles()->attach(Role::where('name','User')->first());
        } 
        if(($request['role_author']))
        {
            $user->roles()->attach(Role::where('name','Author')->first());
        } 
        if(($request['role_admin']))
        {
            $user->roles()->attach(Role::where('name','Admin')->first());
        } 


        return redirect()->back();
    }

    public function blog(){
        $data=Category::select('*')->get()->toArray();
        $posts = Post::orderBy('hot','DESC')->orderBy('id','desc')->paginate(10);
        $categories = Category::all();
        return view('admin.blog',compact('posts','categories', 'data'));
    }



    public function addPost(Request $request){
        $post = new Post;
        $post->post = $request['post'];
        $post->description = $request['description'];
        $post->slug = '';
        $post->seo_title = $request['seo_title'];
        $post->seo_description = $request['seo_description'];
        $post->hot = $request['hot'];
        $post->news = $request['news'];
        $post->is_hidden = $request['is_hidden'];
        $post->category_id = $request['category_id'];
        $post->user_id =  Auth::user()->id;

        if($request->hasFile('avatar')){


            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(400,225)->save(public_path('/photos/shares/'.$filename));

            $post->avatar = ('/photos/shares/'.$filename);

        } else{
            $post->avatar = ('/photos/shares/queenland.jpg');
        }
        $post->save();
        $post->slug = str_slug($post->post).'-'.$post->id;
        $post->save();

        $categories = Category::all();
        foreach ($categories as $category) {
            if($request[$category->id])
            {
                $post->category()->attach($category);
            }
        }
        return redirect()->back();
    }
    public function removePost(Request $request){
        Post::where('id',$request['id'])->first()->delete();
        return redirect()->route('blog-manage');
    }

    public function editPost($id){
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $data=Category::select('id','category','parent_id')->get()->toArray();
        return view('admin.postEdit', compact('id', 'post','categories','data'));

    }

    public function updatePost($id, Request $request)
    {
        $post = Post::findOrFail($id);
        $post->post = $request['post'];
        $post->description = $request['description'];
        $post->slug = $request['slug'];
        $post->seo_title = $request['seo_title'];
        $post->seo_description = $request['seo_description'];
        $post->hot = (is_null($request['hot']) ? '0' : '1');
        $post->news = (is_null($request['news']) ? '0' : '1');
        $post->is_hidden = (is_null($request['is_hidden']) ? '0' : '1');
        $post->category_id = $request['category_id'];
        $post->user_id =  Auth::user()->id;


        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(400, 225)->save(public_path('/photos/shares/' . $filename));
            $post->avatar = ('/photos/shares/' . $filename);
        } else {
        }
        try {
            $post->save();
            $post->category()->detach();
        } catch (\Illuminate\Database\QueryException $e) {

            dd($e);
        }
       $categories = Category::all();
       foreach ($categories as $category) {

           if ($request[$category->id]) {

               $post->category()->attach($category);
           }
       }
        return redirect('/admin/blog-manage/')->with('success', 'Edit ' . $post->post . ' success');
    }


    public function category(){
        $categories = \App\Category::orderBy('position','DESC')->get();
        $data=Category::select('id','category','parent_id')->get()->toArray();
        return view('admin.category',compact('categories', 'data'));
    }

    public function addCategory(CategoryRequest $request){
        $category = new Category;
        $category->category = $request['category'];
        $category->parent_id = $request->parent_id;
        $category->description = $request['description'];
        $category->slug = str_slug($category->description);
        $category->position = $request['position'];
        $category->save();
        return redirect()->back();
    }

    public function removeCategory(Request $request){
        Category::where('id',$request['id'])->first()->delete();
        return redirect()->back();
    }

    public function editCategory($id){
        $categories = \App\Category::all();
        $category = Category::findOrFail($id);
        $data=Category::select('id','category','parent_id')->get()->toArray();
        return view('admin.categoryEdit',compact('category','id', 'categories', 'data'));

    }

    public function updateCategory($id, EditCategoryRequest $request){
        $category = Category::findOrFail($id);

        $category->category = $request['category'];
        $category->parent_id = $request->parent_id;
        $category->description = $request['description'];
        $category->position = $request['position'];
        $category->slug = str_slug($category->description);
        $category->is_hidden = (is_null($request['is_hidden']) ? '0' : '1');
        $category->save();
        return redirect()->route('category-manager')->with('message','Đã thêm thành công');
    }

    public function customers(){
        $customers = \App\Customer::orderBy('id','DESC')->paginate(20);
        return view('admin.customers',compact('customers'));
    }
    public function removeCustome(Request $request){
        Customer::where('id',$request['id'])->first()->delete();
        return redirect()->back();
    }
    public function quyCanHot(){
        if(Storage::exists('quy-can-hot/nha-vuon')){
            $nhavuon = Storage::get('quy-can-hot/nha-vuon');
        }
        else{
            $nhavuon = "";
        }

        if(Storage::exists('quy-can-hot/song-lap')){
            $songlap = Storage::get('quy-can-hot/song-lap');
        }
        else{
            $songlap = "";
        }

        if(Storage::exists('quy-can-hot/tu-lap')){
            $tulap = Storage::get('quy-can-hot/tu-lap');
        }
        else{
            $tulap = "";
        }

        if(Storage::exists('quy-can-hot/don-lap')){
            $donlap = Storage::get('quy-can-hot/don-lap');
        }
        else{
            $donlap = "";
        }
        
        return view('admin.quyCanHot',compact('nhavuon','songlap','tulap','donlap'));
    }

    public function updateQuyCanHot(Request $request){
        $quyCanHotID = $request['id'];
        $quyCanHotContent = $request['content'];
        Storage::put('quy-can-hot/'.$quyCanHotID, $quyCanHotContent);
        
        return redirect()->back()->with('message','Đã thêm thành công');
    }

    public function slide()
    {
        $slide = Slide::all();
        return view('admin.slide', compact('slide'));
    }
    public function addSlide(SlideRequest $request)
    {
        $slide = new Slide;
        $slide->title = $request['title'];
        $slide->description = $request['description'];
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $width = Image::make($image)->width();
            $height = Image::make($image)->height();
            if($width <= 1920 && $height <= 1080)
            {
            Image::make($image)->resize(1920,1080)->save(public_path('/photos/shares/'.$filename));
            $slide->image = ('/photos/shares/'.$filename);
            }
            else{
                return redirect()->back()->with('error', 'Kích thước ảnh phải be hơn 1920x1080');
            }
            Image::make($image)->resize(1920,1080)->save(public_path('/photos/shares/'.$filename));
            $slide->image = ('/photos/shares/'.$filename);
        } else{
            $slide->image = ('/photos/shares/queenland.jpg');
        }
        $slide->save();
        return redirect()->back()->with('success', 'Thêm thành công');
    }
    public function editSlide($id)
    {
        $slide = Slide::findOrFail($id);
        return view('admin.editSlide', compact('slide', 'id'));
    }
    public function updateSlide($id, SlideRequest $request)
    {
        $slide = Slide::findOrFail($id);
        $slide->title = $request['title'];
        $slide->description = $request['description'];
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $width = Image::make($image)->width();
            $height = Image::make($image)->height();
            if($width <= 1920 && $height <= 1080)
            {
            Image::make($image)->resize(1920,1080)->save(public_path('/photos/shares/'.$filename));
            $slide->image = ('/photos/shares/'.$filename);
            }
            else{
                return redirect()->back()->with('error', 'Kích thước ảnh phải be hơn 1920x1080');
            }
            Image::make($image)->resize(1920,1080)->save(public_path('/photos/shares/'.$filename));
            $slide->image = ('/photos/shares/'.$filename);
        } else{
            $slide->image = ('/photos/shares/queenland.jpg');
        }
        $slide->save();
        return redirect()->route('slide-manager')->with('success-update', 'Sửa thành công');
    }
    public function removeSlide(Request $request)
    {
        Slide::where('id', $request['id'])->first()->delete();
        return redirect()->route('slide-manager');
    }
}
