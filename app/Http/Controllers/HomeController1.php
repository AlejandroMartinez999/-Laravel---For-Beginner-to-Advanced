<?php

namespace App\Http\Controllers;

use App\Models\posts;
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

        // *consultas por numeros
        // return DB::table('posts')->count();
        // return DB::table('posts')->sum('views');
        // return DB::table('posts')->min('views');
        // return DB::table('posts')->max('views');
        // return DB::table('posts')->avg('views');
        // return DB::table('posts')->sum('views');

        // *consuktas por moddelos
        // return posts::all();
        // return posts::find(61);
        // $post=posts::find(53);
        // return $post->tittle;
        // return $post=posts::findOrFail(1053);
        // $posts=posts::all();
        // foreach ($posts as $post) {
        //     echo $post->tittle;

        // *consultas por modelos condiciones
        // return posts::where('views','=',100)->where('id','=',53)->get();
        // return posts::where('views','=',100)->orWhere('id','=',61)->get();

        //* insetar datos atraves de modelos
        // $posts = new posts();
        // $posts->tittle = 'post99';
        // $posts->description = 'this is a description';
        // $posts->status = '1';
        // $posts->publish_date = date('y-m-d');
        // $posts->user_id= 1;
        // $posts->id_category= 1;
        // $posts->views= 400;

        // $posts->save();

        // *actualizacion de datos atra ves de modelos
        // $post=posts::where('id',53)->first();
        // $post->tittle='thi is a new title';
        // $post->description='thi is a new description';
        // $post->save();
        // dd('success');
        // return $post;

        // *borrar datos  con modelos
        // posts::findOrFail(55)->delete();
        // posts::where('id',55)->delete();
        // dd('success');

        // * crear datos y cambiar masivos
        // $posts = posts::create([
        //     'tittle' => 'this is from mass assign',
        //     'description' => 'this is a description from mass assign',
        //     'status' => 1,
        //     'publish_date' => date('y-m-d'),
        //     'user_id' => 1,
        //     'id_category' => 2,
        //     'views' => 500,
        // ]);
        // dd('success');
        // posts::where('status',0)->update([
        //     'tittle' => 'The data has beenn update',
        //     'description' => 'The data has beenn update',
        // ]);
        // dd('success');
            // *eliminar datos sin que desaparescan de la tabla
        // posts::find(53)->delete();
        // dd('success');

        // *consultar los datos eliminados
        // return posts::onlyTrashed()->get();

        // return posts::all();
        // *recuperar los datos que no se han eliminado completamente
        // posts::withTrashed()->find(53)->restore();
            // dd('success');

            // *eliminar datos permanenetemente
            posts::withTrashed()->find(53)->forceDelete();
            // dd('success');
            
        // }
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
