<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table='comments';
    protected $fillable = [
        'name','email','comment','blog_id','parent_comment_id'
    ];
    // public function blogusers(){
    //     return $this->hasOne(bloguser::class,'id','bloguser');
    // }

    // public function blogcategorys(){s
    //     return $this->hasMany(blogcategory::class,'id','category');
    // }

    public function replies()
    {
        return $this->hasMany(comment::class, 'parent_comment_id');
    }
}
