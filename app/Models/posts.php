<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class posts extends Model
{
    //
    use HasFactory, SoftDeletes, Notifiable;

    protected $table='posts';
    protected $primaryKey = 'id';
    public $incrementing = false; // Si `id_reservaciones` no es un entero autoincremental, añade esta línea
    protected $keyType = 'string';
    //
    protected $fillable =['id','tittle','description','status',"publish_date",'user_id','views','user_id' ];
    // protected $guarded =['id','title','description','status',"publish_date",'user_id','views','user_id' ];

    public function categories(){
        return $this->belongsTo(categories::class,'id_category','id');
    }

    public function tags(){
        return $this->belongsToMany(tags::class,'post_tag','post_id','tag_id');
    }
    //
}
