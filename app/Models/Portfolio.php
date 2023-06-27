<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    use HasFactory;
    protected $table='portfolio';
    protected $fillable = [
        'projectname','category','androidlink','ioslink','weblink','thumbnail','ordering',
    ];
    public function category_data(){
        return $this->hasMany(Category::class,'id','category');

    }  
    // protected static function boot()
    // {
    //     parent::boot();

    //     Portfolio::creating(function ($model) {
    //         $model->ordering = Portfolio::max('ordering') + 1;
    //     });
    // }
   
}
