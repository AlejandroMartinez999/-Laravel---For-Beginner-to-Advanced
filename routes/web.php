<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\HomeController3;
use App\Http\Controllers\HomeController4;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController as  Person;
use App\Http\Controllers\PostController;
use GuzzleHttp\Psr7\UploadedFile;


Route::get('/', function () {
    return view('welcome');
});
Route::get('person',function(){
    $person = new Person();
    return$person->name();
    return$person->age();
});

route::get('/about',function(){
    return "<h1> about page </h1>";
})->name('about');

route::get('/contact',function(){
    return "<h1> contact page </h1>";
});

Route::get('/contact/{id}',function($id){
    return $id;
})->name('edit-contact');

route::get('home', function(){
    return "<a href='".route('edit-contact',1)."'> About</a>";
});

// grupo de rutas
route::group(['prefix'=>'costumer'],function(){



route::get('/',function(){
    return "<h1> customer List</h1>";
});

route::get('/create',function(){
    return "<h1> customer create</h1>";
});

route::get('/show',function(){
    return "<h1> customer show</h1>";
});
});

//* metodos de rutas
//* get - request a resourcwe
//* post create a new resource
//* put-update a resource
//* patch - modify a resource
//* delete - delete a resource


// fall bacck route

Route::fallback(function(){
    return "route no exist!";
});

// views
route::get('about1',function(){
    $about='this is about page';
    $about2='this is about two';
    return view('about.about',compact('about','about2'));
});
route::get('contac1',function(){
    return view('contact');
});

Route::get('/home',function(){
    $blogs=[
        [
            'title' =>'title one',
            'body' => 'this is a body text',
            'status'=> '1'
        ],
        [
            'title' =>'title two',
            'body' => 'this is a body text',
            'status'=> '0'
        ],
        [
            'title' =>'title trhee',
            'body' => 'this is a body text',
            'status'=> '1',
        ],
        [
            'title' =>'title four',
            'body' => 'this is a body text',
            'status'=> '0',
        ],
        ];
    return view('home',compact('blogs'));
});

// route controller

Route::get('/home1',[HomeController::class,'index']);

route::get('about2',[AboutController::class,'about']);


route::get('contac2',[ContactController::class,'contact']);

Route::resource('blog',BlogController::class);

Route::get('/home2',HomeController1::class);

Route::get('/home3',HomeController3::class);

Route::get('/home4',HomeController4::class);

Route::get("/sucess",function(){
    return "<h1> sucessfully uploaded</h1>";
})->name('sucess');

Route::get('downolad',[ImageController::class,'download'])->name('download');

Route::post('/UploadedFile',[ImageController::class,'handleImage'])->name('upload-file');

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login',[LoginController::class,'handleLogin'])->name('login.submit');

Route::get('/posts/trash',[PostController::class,'trash'])->name('posts.trash');

Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');

Route::Delete('/posts/{id}/forceDelete', [PostController::class, 'forceDelete'])->name('posts.forceDelete');

Route::resource('posts',PostController::class);

// CSRF token
