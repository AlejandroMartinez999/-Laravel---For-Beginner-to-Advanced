<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function handleImage(Request $request)
    {
        // return $request->all();
        // dd($request->file('image'));
        $request->validate(
            [
                'image'=>['required','min:100','max:2000','image']
            ]
        );
        $request->image->storeAS('/images','Tsugumi💙.png');
    }
}
