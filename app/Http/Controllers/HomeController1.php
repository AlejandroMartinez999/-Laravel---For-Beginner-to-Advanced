<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController1 extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // *buscar datos con condicionales
        // return  DB::table('posts')->find(7);
        // return  DB::table('posts')->get();
        // return  DB::table('posts')->first();
        // return  DB::table('posts')->pluck('id','tittle');
        // return DB::table('posts')->where('id','>',10)->where('id','<',20)->get();
        // return DB::table('posts')->where('status', '=', 1)->get();
        // DB::table('posts')->where('status', '=', 1)->get();

        // *insertar datos
        //     DB::table('posts')->insert((
        //         [[

        //             'tittle'=>'this is a test data',
        //             'description'=>'Hola mi nombre es Harry Potter cual es tu nombre ',
        //             'status'=>1,
        //             'publish_date'=>date('y-m-d'),
        //             'user_id'=>1,
        //         ],
        //         [
        //             'tittle'=>'this is a test data2',
        //             'description'=>'Hola Harry Potter ,Mi nombre es Tom Marvolo Riddle',
        //             'status'=>1,
        //             'publish_date'=>date('y-m-d'),
        //             'user_id'=>2,
        //         ],
        //         ]
        // ));
        // dd('success');
        // *cambios de datos de un registro
        // DB::table('posts')->where('id', 52)->update([
        //     'tittle' => 'hey we update our title',
        //     'description' => 'thi is update description',
        // *elminar un registro
        // DB::table('posts')->delete(52);
        // dd('success');
        // *seleccionar elementos de 2 tablas
        // return DB::table('posts')->join('categories', 'posts.id_category', '=', 'categories.id')
        // ->select('categories.*')
        // ->get();
        // ]);
        // return dd('success');

        // return DB::table('posts')->count();
        // return DB::table('posts')->sum('views');
        return DB::table('posts')->min('views');
        return DB::table('posts')->max('views');
        return DB::table('posts')->avg('views');
        return DB::table('posts')->sum('views');
        // $blogs=[
        //     [
        //         'title' =>'title one',
        //         'body' => 'this is a body text',
        //         'status'=> '1'
        //     ],
        //     [
        //         'title' =>'title two',
        //         'body' => 'this is a body text',
        //         'status'=> '0'
        //     ],
        //     [
        //         'title' =>'title trhee',
        //         'body' => 'this is a body text',
        //         'status'=> '1',
        //     ],
        //     [
        //         'title' =>'title four',
        //         'body' => 'this is a body text',
        //         'status'=> '0',
        //     ],
        //     ];
        // return view('home',compact('blogs'));
        // //
    }
}
