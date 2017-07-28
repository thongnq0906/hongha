<?php

Route::get('/submit', 'ContactController@contactSubmit')->name('victory-tower');
Route::post('/submit', 'ContactController@sendSubmit')->name('victory-tower');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/tieu-khu.html','FrontendController@shopHouse')->name('tieu-khu');
Route::get('/tin-tuc.html','FrontendController@tinTuc')->name('tin-tuc');
Route::get('/tin-tuc/{id}.html','FrontendController@tinTucChiTiet')->name('chi-tiet');
Route::get('/quy-can-hot.html','FrontendController@quyCanHot')->name('quy-can-hot-frontend');
Route::get('/lien-he.html','FrontendController@lienHe')->name('lien-he');
Route::get('/lien-he2.html','FrontendController@lienHe2')->name('lien-he2');
Route::get('/tien-ich.html','FrontendController@tienIch')->name('tien-ich');
Route::post('/lien-he.html','FrontendController@contactSubmit')->name('contact-submit');
Route::get('/menu','FrontendController@menu')->name('menu');
Route::get('/newpost','FrontendController@newPost')->name('new-post');
Route::get('/hot','FrontendController@newHot')->name('new-hot');
Route::get('/category/{slug}.html','FrontendController@getCategory')->name('category');
Route::get('/{id}.html','FrontendController@getPage')->name('page');


Route::get('/home',function(){
    return redirect()->route('admin.index');
});
// Begin admin prefix backend
Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {

Route::get('/',[
    'uses' => 'BackendController@index',
    'as' => 'admin.index',
    ]);

Route::get('/user-manage',[
    'uses' => 'BackendController@user',
    'as' => 'user-manage',
    'middleware' => 'roles',
    'roles' => ['Admin'],
    ]);


Route::post('/admin/role-assign',[
    'uses' => 'BackendController@roleAssign',
    'as' => 'admin.assign',
    'middleware' => 'roles',
    'roles' => ['Admin'],
    ]);


Route::get('/blog-manage',[
    'uses' => 'BackendController@blog',
    'as' => 'blog-manage',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::post('/add-post',[
    'uses' => 'BackendController@addPost',
    'as' => 'add-post',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::post('/add-post-as-draft',[
    'uses' => 'BackendController@addPostAsDraft',
    'as' => 'add-post-as-draft',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::get('/edit-post/{id}',[
    'uses' => 'BackendController@editPost',
    'as' => 'edit-post',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::patch('/edit-post/{id}',[
    'uses' => 'BackendController@updatePost',
    'as' => 'update-post',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::post('/remove-post',[
    'uses' => 'BackendController@removePost',
    'as' => 'remove-post',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::get('/category-manage',[
    'uses' => 'BackendController@category',
    'as' => 'category-manager',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::post('/add-category',[
    'uses' => 'BackendController@addCategory',
    'as' => 'add-category',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::get('/edit-category/{id}',[
    'uses' => 'BackendController@editCategory',
    'as' => 'edit-category',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::post('/update-category/{id}',[
    'uses' => 'BackendController@updateCategory',
    'as' => 'update-category',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::post('/remove-category',[
    'uses' => 'BackendController@removeCategory',
    'as' => 'remove-category',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::get('/customers',[
    'uses' => 'BackendController@customers',
    'as' => 'customer',
    'middleware' => 'roles',
    'roles' => ['Admin'],
    ]);

Route::post('/remove-customer',[
    'uses' => 'BackendController@removeCustome',
    'as' => 'remove-customer',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::get('/quy-can-hot',[
    'uses' => 'BackendController@quyCanHot',
    'as' => 'quy-can-hot',
    'middleware' => 'roles',
    'roles' => ['Author','Admin'],
    ]);

Route::post('/quy-can-hot',[
    'uses' => 'BackendController@updateQuyCanHot',
    'as' => 'update-quy-can-hot',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);
Route::get('/slide-manage',[
    'uses' => 'BackendController@slide',
    'as' => 'slide-manager',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);
Route::post('/add-slide',[
    'uses' => 'BackendController@addSlide',
    'as' => 'add-slide',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);
Route::get('/edit-slide/{id}',[
    'uses' => 'BackendController@editSlide',
    'as' => 'edit-slide',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::post('/update-slide/{id}',[
    'uses' => 'BackendController@updateSlide',
    'as' => 'update-slide',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

Route::post('/remove-slide',[
    'uses' => 'BackendController@removeSlide',
    'as' => 'remove-slide',
    'middleware' => 'roles',
    'roles' => ['Admin','Author'],
    ]);

});

//End admin route

//Route for ckeditor

$middleware = array_merge(\Config::get('lfm.middlewares'), [
    '\Unisharp\Laravelfilemanager\middlewares\MultiUser',
    '\Unisharp\Laravelfilemanager\middlewares\CreateDefaultFolder'
]);
$prefix = \Config::get('lfm.prefix', 'laravel-filemanager');
$as = 'unisharp.lfm.';
$namespace = '\Unisharp\Laravelfilemanager\controllers';

// make sure authenticated
Route::group(compact('middleware', 'prefix', 'as', 'namespace'), function () {

    // Show LFM
    Route::get('/', [
        'uses' => 'LfmController@show',
        'as' => 'show'
    ]);

    // Show integration error messages
    Route::get('/errors', [
        'uses' => 'LfmController@getErrors',
        'as' => 'getErrors'
    ]);

    // upload
    Route::any('/upload', [
        'uses' => 'UploadController@upload',
        'as' => 'upload'
    ]);

    // list images & files
    Route::get('/jsonitems', [
        'uses' => 'ItemsController@getItems',
        'as' => 'getItems'
    ]);

    // folders
    Route::get('/newfolder', [
        'uses' => 'FolderController@getAddfolder',
        'as' => 'getAddfolder'
    ]);
    Route::get('/deletefolder', [
        'uses' => 'FolderController@getDeletefolder',
        'as' => 'getDeletefolder'
    ]);
    Route::get('/folders', [
        'uses' => 'FolderController@getFolders',
        'as' => 'getFolders'
    ]);

    // crop
    Route::get('/crop', [
        'uses' => 'CropController@getCrop',
        'as' => 'getCrop'
    ]);
    Route::get('/cropimage', [
        'uses' => 'CropController@getCropimage',
        'as' => 'getCropimage'
    ]);

    // rename
    Route::get('/rename', [
        'uses' => 'RenameController@getRename',
        'as' => 'getRename'
    ]);

    // scale/resize
    Route::get('/resize', [
        'uses' => 'ResizeController@getResize',
        'as' => 'getResize'
    ]);
    Route::get('/doresize', [
        'uses' => 'ResizeController@performResize',
        'as' => 'performResize'
    ]);

    // download
    Route::get('/download', [
        'uses' => 'DownloadController@getDownload',
        'as' => 'getDownload'
    ]);

    // delete
    Route::get('/delete', [
        'uses' => 'DeleteController@getDelete',
        'as' => 'getDelete'
    ]);

    Route::get('/demo', 'DemoController@index');

    // Get file when base_directory isn't public
    $images_url = '/' . \Config::get('lfm.images_folder_name') . '/{base_path}/{image_name}';
    $files_url = '/' . \Config::get('lfm.files_folder_name') . '/{base_path}/{file_name}';
    Route::get($images_url, 'RedirectController@getImage')
        ->where('image_name', '.*');
    Route::get($files_url, 'RedirectController@getFIle')
        ->where('file_name', '.*');
});


/*
 * Route sinh ra sitemap
 * Bởi quanlv
 * itqueenland2017@gmail.com
 */
Route::get('/sitemap.xml','SitemapController@sitemap');
Route::get('/{id}','FrontendController@tinTucRedirect')->name('tinTucRedirect');
