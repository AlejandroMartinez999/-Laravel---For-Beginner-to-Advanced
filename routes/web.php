<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\HomeController3;
use App\Http\Controllers\HomeController4;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController as Person;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SampleController;
use App\Mail\OrderShipped;
use App\Models\posts1;
use App\Support\Facades\CustomFacade;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
Route::get('/', function () {
    return view('welcome');
});

Route::get('person', function () {
    $person = new Person();
    return $person->name();
    return $person->age();
});

Route::get('/about', function () {
    return "<h1> about page </h1>";
})->name('about');

Route::get('/contact', function () {
    return "<h1> contact page </h1>";
});

Route::get('/contact/{id}', function ($id) {
    return $id;
})->name('edit-contact');

Route::get('home', function () {
    return "<a href='" . route('edit-contact', 1) . "'> About</a>";
});

// Group of routes
Route::group(['prefix' => 'customer'], function () {
    Route::get('/', function () {
        return "<h1> customer List</h1>";
    });

    Route::get('/create', function () {
        return "<h1> customer create</h1>";
    });

    Route::get('/show', function () {
        return "<h1> customer show</h1>";
    });
});

// Route methods
// get - request a resource
// post - create a new resource
// put - update a resource
// patch - modify a resource
// delete - delete a resource

// Fallback route
Route::fallback(function () {
    return "route no exist!";
});

// Views
Route::get('about1', function () {
    $about = 'this is about page';
    $about2 = 'this is about two';
    return view('about.about', compact('about', 'about2'));
});

Route::get('contact1', function () {
    return view('contact');
});

Route::get('/home', function () {
    $blogs = [
        [
            'title' => 'title one',
            'body' => 'this is a body text',
            'status' => '1'
        ],
        [
            'title' => 'title two',
            'body' => 'this is a body text',
            'status' => '0'
        ],
        [
            'title' => 'title three',
            'body' => 'this is a body text',
            'status' => '1',
        ],
        [
            'title' => 'title four',
            'body' => 'this is a body text',
            'status' => '0',
        ],
    ];
    return view('home', compact('blogs'));
});

// Route controller
Route::get('/home1', [HomeController::class, 'index']);

Route::get('about2', [AboutController::class, 'about']);

Route::get('contact2', [ContactController::class, 'contact']);

Route::resource('blog', BlogController::class);

Route::get('/home2', HomeController1::class);

Route::get('/home3', HomeController3::class);

Route::get('/home4', HomeController4::class);

Route::get("/success", function () {
    return "<h1> successfully uploaded</h1>";
})->name('success');

Route::get('download', [ImageController::class, 'download'])->name('download');

Route::post('/UploadedFile', [ImageController::class, 'handleImage'])->name('upload-file');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');



// Route::get

Route::get('/posts/trash', [PostController::class, 'trash'])->name('posts.trash');

Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');

Route::delete('/posts/{id}/forceDelete', [PostController::class, 'forceDelete'])->name('posts.forceDelete');

Route::resource('posts', PostController::class)
// ->middleware('authCheck');
;

Route::get('/sample', [SampleController::class, 'index'])->name('sample.index');

Route::get('/check', function () {
    return CustomFacade::SomeMethod();
});

Route::get('/unavailable', function () {
    return view('unavailable');
})->name('unavailable');
// CSRF token

Route::get('/contact',function(){
    $posts=posts1::all();

    return view('contact',compact('posts'));
});

// ?routegrup
Route::group(['middleware' => 'authCheck'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/profile', function () {
        return view('profile');
    });
});

//?email
route::get('/send-email',function(){
    // Mail::raw('Hello world this is a test mail', function($message){
    //     $message->to('alexmtzf18@gmail.com')->subject('noreplay');
    // });
    Mail::send(new OrderShipped);
    dd('success');
});

// ? http

Route::get('/get-session',function(Request $request)
{
    // $data = session()->all();

    $data = $request->session()->all();

    // $data=$request->session()->get('_token');
    dd($data);
});

Route::get('/save-session',function(Request $request)
{

    session(['user_id'=>'123']);
    $request->session()->put(['user_status'=>'logged_in']);
    session(['user_ip'=>'123.23.11']);
    return redirect('/get-session');
});

Route::get('/destroy-session',function(Request $request){
    // $request->session()->forget(['user_id','user_ip']);
    // session()->forget(['user_id','user_ip']);
    session()->flush();
    return redirect('/get-session');

});

Route::get('/flash-session', function (Request $request){
    // $request->session()->flash('status','true');
    Session::flash('status', 'true');
    return redirect('get-session');
});

Route::get('/forget-cache',function(){
    Cache::forget('posts1');
});

