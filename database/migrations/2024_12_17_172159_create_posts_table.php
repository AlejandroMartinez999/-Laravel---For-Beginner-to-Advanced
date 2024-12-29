<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('tittle',100);
            $table->text('description');
            $table->boolean('status');
            $table->timestamps();
            // More Datatypes
            //? $table->date('date');
            // ?$table->datetime('date_time');
            // ?$table->time('time');19

            // ?$table->decimal('ammount')->default(0);
            // ?$table->double('double');
            // ?$table->float('float');
            // ?$table->integer('integer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
