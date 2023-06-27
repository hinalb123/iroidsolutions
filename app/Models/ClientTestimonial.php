<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTestimonial extends Model
{
    use HasFactory;
    protected $table='client_testimonials';
    protected $fillable = [
        'name','position','profilepic','description','country','ordering',
    ];
    public function country_data(){
        return $this->hasOne(Country::class,'id','country');

    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     ClientTestimonial::creating(function ($model) {
    //         $model->ordering = ClientTestimonial::max('ordering') + 1;
    //     });
    // }
}
