<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\StorageUnlinkCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class HomeController4 extends Controller
{
    //
    public function __invoke()
    {

        // *eliminar archivos
        // Storage::disk('public')->delete('images/Tsugumi💙.png')	;
        // File::delete(storage_path('/app/public/images/Tsugumi💙.png'));
        // unlink(storage_path('/app/public/images/Tsugumi💙.png'));

        return view('home3');

    }
}
