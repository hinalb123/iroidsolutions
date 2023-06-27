<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClapBlog extends Model
{
    use HasFactory;
    protected $table='clap_blog';
    protected $fillable = [
        'blog_id','count'
    ];

}
