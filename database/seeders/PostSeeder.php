<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; // Corregido: Usar Facade DB
use Illuminate\Support\Str;        // Importar Str para usar Str::random
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar datos en la tabla 'posts'
        for($i=1;$i<=50; $i++){

            DB::table('posts')->insert([
                'tittle' => Str::random(20),
                'description' => Str::random(200),
                'status' => 1,
                'publish_date' => now()->toDateString(), // Usar now() en lugar de date()
                'user_id' => 1,
            ]);
        }
    }
}
