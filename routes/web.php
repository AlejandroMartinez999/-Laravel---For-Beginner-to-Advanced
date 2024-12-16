<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController as  Person;

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
