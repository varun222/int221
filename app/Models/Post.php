<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   protected $guarded = [];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
}
    public function setPostImageAttribute($value){
        $this->attributes['post_image'] = asset($value);
    }
    public function  getPostImageAttribute($value){
        return asset($value);
    }
}
