<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcategory extends Model
{
    use HasFactory;
    protected $table='blogcategories';
    protected $fillable = [
        'category',
    ];
}
