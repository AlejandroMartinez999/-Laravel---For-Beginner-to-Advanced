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
