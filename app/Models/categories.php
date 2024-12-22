<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id','name'];
    public function posts(){
        return $this->hasMany(posts::class,'id_category','id');
    }
}
