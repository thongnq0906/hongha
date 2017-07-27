<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Post;
use Mail;
use Auth;
use Storage;
use App\Http\Requests\ContactRequest;
use App\Category;

class FrontendController extends Controller
{
    // public function __construct()
    // {
    //     $category = Category::where('status',0)->get();
    //     view()->share('cate',$category);

    //     // new Post
    //     $newPost = Post::where('is_hidden', 0)
    //            ->orderBy('id', 'desc')
    //            ->take(4)
    //            ->get();
    //     view()->share('newPost',$newPost);

    //     // new Hot
    //     $hotPost = Post::where([['hot',1],['is_hidden','0']])->orderBy('id', 'DESC')->limit(5)->get();
    //     view()->share('hotPost',$hotPost);

    //     // new relate
    //     $relate = Post::where('is_hidden', 0)
    //            ->orderBy('id', 'desc')
    //            ->take(4)
    //            ->get();
    //     view()->share('relate',$relate);
    // }
    public function menu() {
        return view('frontend.layouts.menu');
    }

    public function index(){
        return view('frontend.index');
    }
    public function shopHouse(){
    	return view('frontend.shopHouse');
    }
    public function tinTuc(){
        $posts = Post::where('is_hidden', 0)
               ->orderBy('id', 'desc')
               ->paginate(10);
    	return view('frontend.tinTuc',compact('posts'));
    }
    public function tinTucChiTiet($id){
        // news posts
        $newsPosts = Post::where('is_hidden', 0)->orderBy('id', 'desc')->take(3)->get();
        // News set posts
        $news = Post::where([['is_hidden', 0],['news',1]])->orderBy('news', 'desc')->take(2)->get();
        $hotPost = Post::where([['hot',1],['is_hidden','0']])->orderBy('id', 'DESC')->limit(5)->get();
        // echo "<pre>";
        // print_r($hotPost);
        // echo "</pre>";
        $post = Post::where('slug',$id)->firstOrFail();
        //Kiểm tra điều kiện ẩn bài viết
        if ($post->is_hidden){
            if(Auth::check()){

            } else{
                return response('Bài viết đang bị ẩn', 302)
                  ->header('Content-Type', 'text/plain');
            }
        }
        if (!is_numeric($post->views)){
            $post->views = 1;
        }
        else {
            $post->views++;    
        }
        $post->save();
    	return view('frontend.tinTucChiTiet',compact('post','newsPosts','hotPost','news'));
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
        
        return view('frontend.quyCanHot',compact('nhavuon','songlap','tulap','donlap'));
    }

    public function lienHe(){
        return view('frontend.lienHe');
    }
    public function lienHe2(){
        return view('frontend.lienHe');
    }

    public function tienIch() {
        return view('frontend.tienich');
    }

    public function contactSubmit(ContactRequest $request){
        
        $this->validate(request(),[
            'name' => 'required',
            'telephone' => 'required',
            ]);
        $customer = \App\Customer::create(
            $request->all()
            );


        try {
            Mail::to('thanhtamqueenland@gmail.com')->cc(['itqueenland2017@gmail.com','rubyrb88@gmail.com'])->send(new \App\Mail\NewParagonCustomer($customer));
        } catch (\Swift_TransportException $e) {
        }
        
        // try {
        //     Mail::to('itqueenland2017@gmail.com')->send(new \App\Mail\NewParagonCustomer($customer));
        // } catch (\Swift_TransportException $e) {
        // }

        \Session::flash('flash_message','Cảm ơn quý khách đã đăng ký thông tin. Chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất!');
       
        return redirect()->route('lien-he');
        //return view('frontend.lienHe');
        
    }

    public function tinTucRedirect($id){
        return redirect()->route('chi-tiet',compact('id'));
    }

    public function getCategory($slug)
    {
        $get_cate = Category::where('slug', $slug)->first();
        $posts = Post::where('category_id',$get_cate->id)->paginate(9);
        return view('frontend.tinTuc', compact('posts'));
    }

    public function getPage($id)
    {
        $newsPosts = Post::where('is_hidden', 0)->orderBy('id', 'desc')->take(3)->get();
        // News set posts
        $news = Post::where([['is_hidden', 0],['news',1]])->orderBy('news', 'desc')->take(2)->get();
        $hotPost = Post::where([['hot',1],['is_hidden','0']])->orderBy('id', 'DESC')->limit(5)->get();
        $get_cate = Category::where('slug', $id)->first();
        $post = Post::where('category_id',$get_cate->id)->first();
        
        return view('frontend.tinTucChiTiet', compact('post', 'newsPosts','news', 'hotPost'));
    }

}
