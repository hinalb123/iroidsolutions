<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function aboutuspage(){
        return view('about', ['page' => 'home']);
    }
}
