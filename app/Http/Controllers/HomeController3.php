<?php

namespace App\Http\Controllers;

use App\Models\addres;
use App\Models\categories;
use App\Models\posts;
use App\Models\tags;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HomeController3 extends Controller
{
    //
    //
    public function __invoke()
    {
        // *relacion 1 a 1 en tablas sin usar join
        // $users=users::all();
        // return view('home2',compact('users'));


        // *relacion inversa 1 a 1 en tablas sin usar  join inversamente
        // $addresses=addres::all();
        // return view('home2',compact('addresses'));

        // *relacion inversa 1 a 1 en tablas sin usar  join con un solo metodo
        // $categories = categories::find(1)->posts;
        // return view('home2', compact('categories'));

        $posts=posts::with('tags')->get();

        // $tag=tags::first();

        // $post->tags()->attach([2,3,4]);

        return view('home2',compact('posts'));
    }
}
