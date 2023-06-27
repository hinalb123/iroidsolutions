<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class blog extends Model
{    
    // use HasSlug;

    use HasFactory;
    protected $table='blogs';
    protected $fillable = [
        'title','description','thumbnail','blogdate','username','category','bloguser','coverimage','slug','time','seo_description','seo_keyword'
    ];
    public function blogusers(){
        return $this->hasOne(bloguser::class,'id','bloguser');
    }  
    public function clap_blog(){
        return $this->hasMany(ClapBlog::class,'blog_id','id');
    }  
    public function blogcategorys(){
        return $this->hasMany(blogcategory::class,'id','category');
    }  
    public function comments()
    {
        return $this->hasMany(comment::class)->whereNull('parent_comment_id');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
