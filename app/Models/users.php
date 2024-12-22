<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Prompts\Table;

class users extends Model
{
    /** @use HasFactory<\Database\Factories\UsersFactory> */
    use HasFactory,Notifiable;
    protected $table = 'users1';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id','name', 'email','email_verified_at' , 'password','remember_token'];

    public function addres(){
        return $this->hasOne(addres::class,'user_id','id');
    }
}
