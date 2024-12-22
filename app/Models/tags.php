<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class tags extends Model
{
    /** @use HasFactory<\Database\Factories\TagsFactory> */
    use HasFactory, Notifiable;

    protected $table = 'tags';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id','name'];

    public function posts(){
        return $this->belongsToMany(posts::class,'post_tag','tag_id',);
    }
}
