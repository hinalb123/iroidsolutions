<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table='careers';
    protected $fillable = [
        'address','title','experience','technicalskills','optionalskills','openings','otherskills','qualification','benefits','salary','ordering','status',
    ];
    // protected static function boot()
    // {
    //     parent::boot();

    //     Career::creating(function ($model) {
    //         $model->ordering = Career::max('ordering') + 1;
    //     });
    // }
}
