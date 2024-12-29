<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class posts1 extends Model
{
    /** @use HasFactory<\Database\Factories\Posts1Factory> */
    use HasFactory, SoftDeletes;
    public function category1()
    {
        return $this->belongsTo(categories1::class);
    }
}
