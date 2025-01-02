<?php

namespace App\Http\Controllers;

use App\Services\SimpleService;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    private $simpleService;
    public function __construct(SimpleService $simpleService)
    {
        $this->simpleService = $simpleService;
    }



    public function index(Request $request, SimpleService $simpleService)
    {
        $this->simpleService->log('thi is a test log');
        $this->anotherMethod($simpleService);
        return $request->all();

    }

    public function anotherMethod($para){
        $para->log('thi is a test log from another method');
    }

    // public function Store(user $user)
    // {
    //     $user->somting();
    // }


}
