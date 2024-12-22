<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addres extends Model
{
    /** @use HasFactory<\Database\Factories\AddresFactory> */
    use HasFactory;
    protected $table = 'addres';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id','address', 'user_id'];

    public function user(){
        return $this->belongsTo(users::class,'user_id','id');
    }
}
