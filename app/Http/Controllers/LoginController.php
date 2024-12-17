<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    return view('login');
    }
    public function handleLogin(LoginRequest $request){
        // echo $_POST['name'];
        // echo $_POST['email'];
        // echo $_POST['password'];
        // dd($request->all());

        // $request->validate(
            // [
        //     'name'=>['required','alpha','min:6','Max:10'],
        //     'email'=>['required','email'],
        //     'password'=>'required',
        // ],
        // [
        //     'name.required'=> 'The user name field is requiered!',
        //     'name.alpha'=>'Usesr Name Should only contain letters !',
        //     'name.min'=>'sasajljlk!',
        //     'email.email'=>'Hello thi is not email!'
        // ]);
        return $request;
    }
}
