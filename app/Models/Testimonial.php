<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table='testimonials';
    protected $fillable = [
        'clientname','position','country','videolink','thumbnail','description','profilepic','ordering'
    ];
    public function country_data(){
        return $this->hasOne(Country::class,'id','country');

    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     Testimonial::creating(function ($model) {
    //         $model->ordering = Testimonial::max('ordering') + 1;
    //     });
    // }
}
    