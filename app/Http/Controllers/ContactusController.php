<?php

namespace App\Http\Controllers;

use App\Mail\ContactusMail;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function contactuspage(){
        return view('contact', ['page' => 'contactus']);
    }
    public function savecontactus(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message'=>'required',
        ]);
        $contact = Contactus::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        Mail::to(env('MAILCONTACT_IROID'))->send(new ContactusMail($contact));
        return response()->json(['success'=>'Record save']);
    }
}
