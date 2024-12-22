<?php

namespace Database\Seeders;

use App\Models\users;
use App\Models\users1;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    users::factory()->count(4)->create();
    }
}
