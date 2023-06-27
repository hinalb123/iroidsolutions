<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table='clients';
    protected $fillable = [
        'thumbnail','ordering',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     Client::creating(function ($model) {
    //         $model->ordering = Client::max('ordering') + 1;
    //     });
    // }
}
