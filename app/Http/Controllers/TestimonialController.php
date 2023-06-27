<?php

namespace App\Http\Controllers;

use App\Models\ClientTestimonial;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TestimonialController extends Controller
{
   public function testimonialpage(){

    $testimonial = Cache::rememberForever('testimonial', function () {
        return Testimonial::select('id','clientname','position', 'videolink','thumbnail','country')->with('country_data')->where('status','=','1')->orderBy('ordering','asc')->get();
    });

    $clientdes = Cache::rememberForever('clientdes', function () {
        return ClientTestimonial::select('description','name','position','profilepic','country','id')->where('status','=','1')->orderBy('ordering', 'asc')->get();
    });

    //    $testimonial=Testimonial::with('country_data')->orderBy('ordering', 'asc')->get();   
    //    $client=ClientTestimonial::orderBy('ordering', 'asc')->get();
       return view('testimonial',compact('testimonial','clientdes'),['page' => 'testimonialpage']);
   }

}
