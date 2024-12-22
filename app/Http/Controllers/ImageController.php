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
        // *validadr el formato del archivo
        $request->validate(
            [
                'image'=>['required','min:100','max:2000','image']
            ]
        );
        //* subir el archivo en nuestro poryecto
        $request->image->storeAS('/images','Tsugumi💙.png');

        //* redireccionar a la ruta desada
        // return redirect()->route('sucess');
        // return redirect()->back();
        return redirect('/sucess');

    }

    public function download(){
        return response()->download(public_path('/storage/images/Tsugumi💙.png'));
    }
}
