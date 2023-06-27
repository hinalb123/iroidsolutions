<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bloguser extends Model
{
    use HasFactory;
    protected $table='blogusers';
    protected $fillable = [
        'username',
    ];
}
