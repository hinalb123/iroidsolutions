<?php

namespace App\Http\Controllers;

use App\Mail\CareerMail;
use App\Models\Career;
use App\Models\CareerApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function careerpage()
    {
        $career = Career::where('status','=','1')->orderBy('ordering', 'asc')->get();
        return view('career', compact('career'), ['page' => 'career']);
    }
    public function careermore($id)
    {

        $career = Career::all();
        $data = Career::where('id', $id)->first();
        return response()->json(['data' => $data]);
    }
    public function saveapplycareer(Request $request)
    {
     
        // dd($request->all());
        $this->validate($request, [
            'applyname' => 'required',
            'applyemail' => 'required|email',
            'applynumber' => 'required|numeric|digits:10',
            'file' => 'required',
        ]);
        // $cvv = $request->file('applycvv')->store('public/uploadcvv');
        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file('file')->storeAs('uploadcvv', $imageName, 'public');
        }
        if ($request->careerid == "") {
            $career = CareerApply::create([
                'name' => $request->applyname,
                'email' => $request->applyemail,
                'phonenumber' => $request->applynumber,
                'cvv' => $path,
                'career' => 0,
            ]);
        } else {
            $career = CareerApply::create([
                'name' => $request->applyname,
                'email' => $request->applyemail,
                'phonenumber' => $request->applynumber,
                'cvv' => $path,
                'career' => $request->careerid,
            ]);
        }
        $career["cvv"]=URL(Storage::url($career["cvv"]));
        // dd($career["cvv"]);
        // return new CareerMail($career);
        // $career["cvv"]= $career->attach($career->cvv);
        // $career["cvv"]= storage_path('app/public/' . $career->cvv);
        
        Mail::to(env('MAILCONTACT_IROID'))->send(new CareerMail($career));
        Mail::to(env('MAILCAREER_IROID'))->send(new CareerMail($career));

        return back();
    }
}
