<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function returnportfoliopage(){
        return view('portfoliopage',['page' => 'portfolio']);
    }
    public function portfoliopage(Request $request)
    {
        
        $category=0;
        if($request->ajax()){
            if($request->category){
                $category=$request->category;
            }
        }
       
        if($category!=0){
            $iphonedata = Portfolio::select(DB::raw("portfolio.*,replace(replace(replace(replace(replace(category,',',' '),'1','app'),'2','card'),'3','icon'),'4','logo') as `app_name`"))->where('category','like','%'.$category.'%')->where('status','=','1')->orderBy('ordering', 'asc')->paginate(6);
        }else{
            $iphonedata = Portfolio::select(DB::raw("portfolio.*,replace(replace(replace(replace(replace(category,',',' '),'1','app'),'2','card'),'3','icon'),'4','logo') as `app_name`"))->where('status','=','1')->orderBy('ordering', 'asc')->paginate(6);
        }
        $modalData = Portfolio::select(DB::raw("portfolio.*,replace(replace(replace(replace(replace(category,',',' '),'1','app'),'2','card'),'3','icon'),'4','logo') as `app_name`"))->where('status','=','1')->get();
        //  dd($modalData);
        if ($request->ajax()) {
            foreach($iphonedata as $key=>$val){
                $iphonedata[$key]->thumbnail=url(Storage::url($val->thumbnail));
            }

            return response()->json($iphonedata);
        }
       return view('portfolio', compact('iphonedata','modalData'), ['page' => 'portfolio']);    
    }
}
