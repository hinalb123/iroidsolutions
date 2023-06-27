<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApply extends Model
{
    use HasFactory;
    protected $table='career_applies';
    protected $fillable = [
        'name','email','phonenumber','cvv','career',
    ];
    public function career_data(){
        return $this->hasOne(Career::class,'id','career');
    }
    

}
