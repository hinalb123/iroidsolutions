<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officevideo extends Model
{
    use HasFactory;
    protected $table='officevideos';
    protected $fillable = [
        'thumbnail','video','ordering',
    ];

    
    // protected static function boot()
    // {
    //     parent::boot();

    //     Officevideo::creating(function ($model) {
    //         $model->ordering = Officevideo::max('ordering') + 1;
    //     });
    // }
}
