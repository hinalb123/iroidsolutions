<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blogcategory;
use App\Models\bloguser;
use App\Models\Career;
use App\Models\CareerApply;
use App\Models\Category;
use App\Models\Client;
use App\Models\ClientTestimonial;
use App\Models\Contactus;
use App\Models\Country;
use App\Models\Officevideo;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Version;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Hash;
use DataTables;
use Illuminate\Support\Facades\Cache;
use Image;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('admin.login'));
    }
    public function index()
    {
        $country = Country::all();
        return view('Admin.home', compact('country'), ['page' => 'adminvideotestimonial']);
    }
    public function clientmore()
    {
        $client = Client::where('status','=','1')->orderBy('ordering', 'asc')->get();
        return view('awsome_client', compact('client'), ['page' => 'home']);
    }
    public function servicepage()
    {
        return view('service', ['page' => 'home']);
    }

    // public function hometestimonial(){
    //     $videotestimonial = Testimonial::with('country_data')->orderBy('ordering', 'asc')->get();
    //     return response()->json($videotestimonial);
    // }

    public function homepage(Request $request)
    {
        
        $data = Cache::rememberForever('data', function () {
            return Testimonial::select('id','clientname','position', 'videolink','thumbnail','country')->with('country_data')->where('status','=','1')->orderBy('ordering','asc')->get();
        });


        $office = Cache::rememberForever('office', function () {
            return Officevideo::select('id','video','thumbnail')->where('status','=','1')->orderBy('ordering','asc')->get();
        });
        $clienttestimonial = Cache::rememberForever('clienttestimonial', function () {
            return ClientTestimonial::select('description','name','position','profilepic','country','id')->with('country_data')->where('status','=','1')->orderBy('ordering', 'asc')->take(6)->get();
        });
        $client = Cache::rememberForever('client', function () {
            return Client::select('thumbnail','id')->where('status','=','1')->orderBy('ordering', 'asc')->take(12)->get();
        });


        $category = 0;
        if ($request->ajax()) {
            if ($request->category) {
                $category = $request->category;
            }
        }

        if ($category != 0) {
            $iphonedata = Portfolio::select(DB::raw("portfolio.*,replace(replace(replace(replace(replace(category,',',' '),'1','app'),'2','card'),'3','icon'),'4','logo') as `app_name`"))->where('category', 'like', '%' . $category . '%')->orderBy('ordering','asc')->paginate(6);
        } else {
            $iphonedata = Portfolio::select(DB::raw("portfolio.*,replace(replace(replace(replace(replace(category,',',' '),'1','app'),'2','card'),'3','icon'),'4','logo') as `app_name`"))->orderBy('ordering', 'asc')->paginate(6);
        }
        return view('home_page', compact('data', 'office', 'client', 'clienttestimonial', 'iphonedata'), ['page' => 'home']);
    }

    public function hireuspage()
    {
        return view('hireus', ['page' => 'career']);
    }
    public function career()
    {
        $career = CareerApply::with('career_data')->orderBy('id', 'desc')->get();
        // dd($career[9]->career_data->title);
        return view('Admin.career', compact('career'), ['page' => 'admincareerapplication']);
    }
    public function customeversion(){
        $version=Version::first();
        return view('Admin.version',compact('version'), ['page' => 'version']);
    }
    public function saveversion(Request $request)
    {
        $version = Version::first();
        $version->version=$request->version;
        $version->save();
        return back();
    }
    public function careerform()
    {
        return view('Admin.careerform', ['page' => 'admincareer']);
    }
    public function savecareer(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'title' => 'required',
            'experience' => 'required',
            'skill' => 'required',
            'optional' => 'required',
            'opening' => 'required',
            'editor' => 'required',
            'qualification' => 'required',
            'benefits' => 'required',
            'salary' => 'required',
        ]);

        $career = Career::create([

            'address' => $request->address,
            'title' => $request->title,
            'experience' => $request->experience,
            'technicalskills' => $request->skill,
            'optionalskills' => $request->optional,
            'openings' => $request->opening,
            'otherskills' => $request->editor,
            'qualification' => $request->qualification,
            'benefits' => $request->benefits,
            'salary' => $request->salary,
            'ordering' => $request->ordering,
        ]);
        return redirect()->route('admin.showcareer');
    }
    public function internshippage()
    {
        return view('internship', ['page' => 'career']);
    }
    public function clienttestimonial()
    {
        $country = Country::all();
        return view('Admin.clienttestimonial', compact('country'), ['page' => 'adminclient']);
    }


    public function saveclienttestimonial(Request $request)
    {

        $this->validate($request, [
            'clientname' => 'required',
            // 'position' => 'required',
            'description' => 'required',
            'profilepic' => 'mimes:jpeg,png,jpg,svg,webp',
            // 'country'=>'required',

        ]);
        if ($request->has('profilepic')) {

            $profilepic = $request->file('profilepic')->store('profilepic', ['disk' => 'public']);

            $testimonials = ClientTestimonial::create([

                'name' => $request->clientname,
                'position' => $request->position,
                'description' => $request->description,
                'profilepic' => $profilepic,
                'country' => $request->country,
                'ordering' => $request->ordering,

            ]);
        } else {
            $testimonials = ClientTestimonial::create([

                'name' => $request->clientname,
                'position' => $request->position,
                'description' => $request->description,
                // 'profilepic' => $profilepic,
                'country' => $request->country,
                'ordering' => $request->ordering,

            ]);
        }
        return redirect()->route('admin.showclienttestimonial');
    }
    public function testimonials(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'clientname' => 'required',
            'position' => 'required',
            // 'country' => 'required',
            'video' => 'required',
            'file' => 'max:500000',
            'thumbnail' => 'mimes:jpeg,png,jpg,svg|required',

        ]);
        // $path = $request->file('video')->store('public/testimonialvideo');
        $thumbnailpath = $request->file('thumbnail')->store('testimonialimage', ['disk' => 'public']);

        $url = $request->video;
        if (!strpos($url, '/embed/')) {
            $url = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "https://www.youtube.com/embed/$1\"", $url);
            $url = trim($url, '"');
        }

        $testimonials = Testimonial::create([

            'clientname' => $request->clientname,
            'position' => $request->position,
            'country' => $request->country,
            'videolink' => $url,
            'thumbnail' => $thumbnailpath,
            'ordering' => $request->ordering,


        ]);
        return redirect()->route('admin.showtestimonials');
    }
    public function contactusdetail()
    {
        $contact = Contactus::orderBy('id', 'desc')->get();
        // dd( $contact);
        return view('Admin.contactusdetail', compact('contact'), ['page' => 'admincontactus']);
    }

    public function gettestimonialdata()
    {
        return view('Admin.showtestimonials', ['page' => 'adminvideotestimonial']);
    }


    public function showtestimonials()
    {

        $model = Testimonial::with('country_data')->orderBy('id', 'desc')->latest();
        if (request()->ajax()) {

            return datatables()->eloquent($model)

                ->addColumn('action', function (Testimonial $Testimonial) {
                    return '<a href="' . route("admin.edittestimonial", [$Testimonial->id]) . '" class="btn mr-2 "  style="background:#337AB7 !important;color:white"><i class="fas fa-edit"></i>
                                        <a href="javascript:void(0)" onclick="deletedata(' . $Testimonial->id . ')" class="btn-danger btn mt-1"><i class="fas fa-trash"></i>';
                })

                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('Admin.showtestimonials', [
            'page' => 'adminvideotestimonial',
        ]);
    }
    public function getportfoliodata()
    {
        return view('Admin.showportfolio', ['page' => 'adminportfolio']);
    }

    public function getofficedata()
    {
        return view('Admin.showofficevideo', ['page' => 'adminofficevideo']);
    }

    public function getcareerdata()
    {
        $career = Career::orderBy('id', 'desc')->get();
        return view('Admin.showcareer', compact('career'), ['page' => 'admincareer']);
    }
    public function getclientdata()
    {
        return view('Admin.showclient', ['page' => 'adminawsomeclient']);
    }
    public function showportfolio()
    {

        // $data = DB::table("portfolio")
        // ->select("portfolio.*", DB::raw("GROUP_CONCAT(portfolio.id) as portfolio"), DB::raw("GROUP_CONCAT(categories.name) as name"))
        // ->leftjoin("categories", DB::raw("FIND_IN_SET(categories.id,portfolio.category)"), ">", DB::raw('0'))
        // ->groupBy("portfolio.id")->orderBy('ordering', 'asc')->latest();

        $data = Portfolio::select("portfolio.*", DB::raw("GROUP_CONCAT(portfolio.id) as portfolio"), DB::raw("GROUP_CONCAT(categories.name) as name"))
            ->leftjoin("categories", DB::raw("FIND_IN_SET(categories.id,portfolio.category)"), ">", DB::raw('0'))
            ->groupBy("portfolio.id")->orderBy('id', 'desc')->latest();

        // print_r(json_encode($data)); exit();
        if (request()->ajax()) {

            return datatables()->eloquent($data)

                ->addColumn('action', function (Portfolio $portfolio) {
                    return '<a href="' . route("admin.editportfolio", [$portfolio->id]) . '" class="btn mr-2 "  style="background:#337AB7 !important;color:white"><i class="fas fa-edit"></i>
                                        <a href="javascript:void(0)" onclick="deletePostajax(' . $portfolio->id . ')" class="btn-danger btn "><i class="fas fa-trash"></i>';
                })

                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('Admin.showportfolio', [
            'page' => 'adminportfolio',
        ]);

        // return view('Admin.showportfolio', compact('data'),['page' => 'adminportfolio']);
    }

    public function getclienttestimonialdata()
    {
        return view('Admin.showclienttestimonial', ['page' => 'adminclient']);
    }
    public function showclienttestimonial()
    {


        $data = ClientTestimonial::with('country_data')->orderBy('id', 'desc')->latest();

        if (request()->ajax()) {

            return datatables()->eloquent($data)

                ->addColumn('action', function (ClientTestimonial $clienttestimonial) {
                    return '<a href="' . route("admin.editclienttestimonial", [$clienttestimonial->id]) . '" class="btn mr-2 "  style="background:#337AB7 !important;color:white"><i class="fas fa-edit"></i>
                                    <a href="javascript:void(0)" onclick="deletePostajax(' . $clienttestimonial->id . ')" class="btn-danger btn mt-2 "><i class="fas fa-trash"></i>';
                })

                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('Admin.showclienttestimonial', [
            'page' => 'adminclient',
        ]);
    }
    public function portfolio()
    {
        $category = Category::all();
        return view('Admin.portfolio', compact('category'), ['page' => 'adminportfolio']);
    }
    public function officevideo()
    {
        return view('Admin.officevideo', ['page' => 'adminofficevideo']);
    }
    public function showofficevideo()
    {
        $data = Officevideo::orderBy('id', 'desc')->latest();
        // return view('Admin.showofficevideo', compact('office'), ['page' => 'adminofficevideo']);


        if (request()->ajax()) {

            return datatables()->eloquent($data)

                ->addColumn('action', function (Officevideo $officevideo) {
                    return '<a href="' . route("admin.editoffice", [$officevideo->id]) . '" class="btn mr-2 "  style="background:#337AB7 !important;color:white"><i class="fas fa-edit"></i>
                                        <a href="javascript:void(0)" onclick="deletePostajax(' . $officevideo->id . ')" class="btn-danger btn"><i class="fas fa-trash"></i>';
                })

                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('Admin.showofficevideo', [
            'page' => 'adminofficevideo',
        ]);
    }
    public function showoclient()
    {
        $data = Client::orderBy('id', 'desc')->latest();
        // return view('Admin.showclient', compact('client'), ['page' => 'adminawsomeclient']);
        if (request()->ajax()) {

            return datatables()->eloquent($data)

                ->addColumn('action', function (Client $client) {
                    return '<a href="' . route("admin.editclient", [$client->id]) . '" class="btn mr-2 "  style="background:#337AB7 !important;color:white"><i class="fas fa-edit"></i>
                                        <a href="javascript:void(0)" onclick="deletePostajax(' . $client->id . ')" class="btn-danger btn "><i class="fas fa-trash"></i>';
                })

                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('Admin.showclient', [
            'page' => 'adminawsomeclient',
        ]);
    }
    public function clientproject()
    {
        return view('Admin.clientproject', ['page' => 'adminawsomeclient']);
    }

    public function saveportfolio(Request $request)
    {

        $this->validate($request, [

            'projectname' => 'required',
            'category' => 'required',
            'thumbnail' => 'mimes:jpeg,png,jpg,svg|required'

        ]);

        $categoryname = implode(',', $request->category);
        $thumbnailpath = $request->file('thumbnail')->store('portfolioimage', ['disk' => 'public']);
        $portfolio = Portfolio::create([
            'projectname' => $request->projectname,
            'category' => $categoryname,
            'androidlink' => $request->androidlink,
            'ioslink' => $request->ioslink,
            'weblink' => $request->weblink,
            'thumbnail' => $thumbnailpath,
            'ordering' => $request->ordering,
        ]);
        return redirect()->route('admin.showportfolio');
    }
    public function saveclientproject(Request $request)
    {
        $this->validate($request, [
            'thumbnail' => 'mimes:jpeg,png,jpg,svg|required',
        ]);

        $thumbnailpath = $request->file('thumbnail')->store('clientimage', ['disk' => 'public']);
        if ($request->has('thumbnail'))
            $client = Client::create([

                'thumbnail' => $thumbnailpath,
                'ordering' => $request->ordering,
            ]);
        return redirect()->route('admin.showclient');
    }
    public function saveofficevideo(Request $request)
    {
        $this->validate($request, [
            'video' => 'required',
            'thumbnail' => 'mimes:jpeg,png,jpg,svg,webp|required',
        ]);
        $url = $request->video;
        if (!strpos($url, '/embed/')) {
            $url = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "https://www.youtube.com/embed/$1\"", $url);
            $url = trim($url, '"');
        }
        $thumbnailpath = $request->file('thumbnail')->store('officethumbnail', ['disk' => 'public']);
        // $video = $request->file('video')->store('public/officevideo');
        $office = Officevideo::create([
            'video' => $url,
            'thumbnail' => $thumbnailpath,
            'ordering' => $request->ordering,
        ]);
        return redirect()->route('admin.showofficevideo');
    }


    public function deleteportfolio($id)
    {

        // $data1=Portfolio::where('id',$id)->first();
        $portfolio = Portfolio::find($id)->delete();

        return response()->json(['success' => 'Record deleted']);
    }
    public function deleteoffice($id)
    {
        $office = Officevideo::find($id)->delete();

        return response()->json(['success' => 'Record deleted']);
    }
    public function deleteclient($id)
    {
        $client = Client::find($id)->delete();

        return response()->json(['success' => 'Record deleted']);
    }
    public function deletetestimonial($id)
    {

        $testimonial = Testimonial::find($id)->delete();

        return response()->json(['success' => 'Record deleted']);
    }
    public function editportfolio($id)
    {
        $data = Portfolio::where('id', $id)->first();
        // dd($data);
        $category = Category::all();

        return view('Admin.portfolioedit', compact('data', 'category'), ['page' => 'adminportfolio']);
    }

    public function edittestimonial($id)
    {
        $data = Testimonial::where('id', $id)->first();
        $country = Country::all();
        return view('Admin.testimonialedit', compact('data', 'country'), ['page' => 'adminvideotestimonial']);
    }
    public function updateportfolio(Request $request)
    {

        $this->validate($request, [

            'thumbnail' => 'mimes:jpeg,png,jpg,svg,webp',

            'projectname' => 'required',
            'category' => 'required',



        ]);
        $categoryname = implode(',', $request->category);
        if ($request->has('thumbnail')) {
            $name = $request->file('thumbnail')->getClientOriginalName();
            $path = $request->file('thumbnail')->store('portfolioimage', ['disk' => 'public']);
            // dd($request->all(),$path,url(Storage::url($path)));
            $image = $path;
            Portfolio::where('id', $request->id)->update([
                'projectname' => $request->projectname,
                'category' => $categoryname,
                'ioslink' => $request->ioslink,
                'weblink' => $request->weblink,
                'androidlink' => $request->androidlink,
                'thumbnail' => $image,
                'status'=>$request->status,
            ]);
        } else {

            Portfolio::where('id', $request->id)->update([
                'projectname' => $request->projectname,
                'category' => $categoryname,
                'ioslink' => $request->ioslink,
                'weblink' => $request->weblink,
                'androidlink' => $request->androidlink,
                'ordering' => $request->ordering,
                'status'=>$request->status,
            ]);
        }


        return redirect()->route('admin.showportfolio');
    }

    public function updatetestimonial(Request $request)
    {
        $url = $request->video;
        if (!strpos($url, '/embed/')) {
            $url = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "https://www.youtube.com/embed/$1\"", $url);
            $url = trim($url, '"');
        }
        $this->validate($request, [
            'clientname' => 'required',
            'position' => 'required',
            // 'country' => 'required',
            'video' => 'required',
            'file' => 'max:500000',
            // 'thumbnail' => 'mimes:jpeg,png,jpg,svg|required',

        ]);
        if ($request->has('thumbnail')) {

            $thumbnailpath = $request->file('thumbnail')->store('testimonialimage', ['disk' => 'public']);

            Testimonial::where('id', $request->id)->update([
                'clientname' => $request->clientname,
                'position' => $request->position,
                'country' => $request->country,
                'thumbnail' => $thumbnailpath,
                'videolink' => $url,
                'status'=>$request->status,

            ]);
        } else {
            Testimonial::where('id', $request->id)->update([
                'clientname' => $request->clientname,
                'position' => $request->position,
                'country' => $request->country,
                'videolink' => $url,
                'ordering' => $request->ordering,
                'status'=>$request->status,

            ]);
        }


        return redirect()->route('admin.showtestimonials');
    }

    public function showcareer()
    {
        $career = Career::orderBy('id', 'desc')->get();

        return view('Admin.showcareer', compact('career'), ['page' => 'admincareer']);
    }

    public function deletecareer($id)
    {
        $data = Career::find($id)->delete();
        return response()->json(['success' => 'Record deleted']);
    }
    public function deleteclienttestimonial($id)
    {
        $data = ClientTestimonial::find($id)->delete();
        return response()->json(['success' => 'Record deleted']);
    }
    public function deletecareerapplication($id)
    {
        $data = CareerApply::find($id)->delete();
        return response()->json(['success' => 'Record deleted']);
    }

    public function editcareer($id)
    {
        $data = Career::where('id', $id)->first();
        return view('Admin.editcareer', compact('data'), ['page' => 'admincareer']);
    }
 
    public function editoffice($id)
    {
        $data = Officevideo::where('id', $id)->first();
        return view('Admin.editoffice', compact('data'), ['page' => 'adminofficevideo']);
    }
    public function editclient($id)
    {
        $data = Client::where('id', $id)->first();
        return view('Admin.editclient', compact('data'), ['page' => 'adminawsomeclient']);
    }
    public function editclienttestimonial($id)
    {

        $data = ClientTestimonial::where('id', $id)->first();
        $country = Country::all();
        return view('Admin.editclienttestimonial', compact('data', 'country'), ['page' => 'adminclient']);
    }
    public function updateclienttestimonial(Request $request)
    {
        $this->validate($request, [
            'clientname' => 'required',
            'position' => '',
            'description' => 'required',
            'country' => '',
            //'profilepic' => 'mimes:jpeg,png,jpg,svg|required',

        ]);
        if ($request->has('profilepic')) {
            $thumbnailpath = $request->file('profilepic')->store('profilepic', ['disk' => 'public']);

            ClientTestimonial::where('id', $request->id)->update([
                'profilepic' => $thumbnailpath,
                'name' => $request->clientname,
                'description' => $request->description,
                'position' => $request->position,
                'country' => $request->country,
                'status'=>$request->status,


            ]);
        } else {
            ClientTestimonial::where('id', $request->id)->update([

                'name' => $request->clientname,
                'description' => $request->description,
                'position' => $request->position,
                'country' => $request->country,
                'ordering' => $request->ordering,
                'status'=>$request->status,

            ]);
        }

        return redirect()->route('admin.showclienttestimonial');
    }
    public function updateclient(Request $request)
    {
        // dd($request->all());
        if ($request->has('thumbnail')) {
            $thumbnailpath = $request->file('thumbnail')->store('clientimage', ['disk' => 'public']);

            Client::where('id', $request->id)->update([
                'thumbnail' => $thumbnailpath,
                'status'=>$request->status,


            ]);
        } else {
            Client::where('id', $request->id)->update([
                'ordering' => $request->ordering,
                'status'=>$request->status,


            ]);
        }
        return redirect()->route('admin.showclient');
    }

    
    public function updatecareer(Request $request)
    {
        $this->validate($request, [
            'address' => 'required',
            'title' => 'required',
            'experience' => 'required',
            'skill' => 'required',
            'optional' => 'required',
            'opening' => 'required',
            'editor' => 'required',
            'qualification' => 'required',
            'benefits' => 'required',
            'salary' => 'required',
        ]);

        Career::where('id', $request->id)->update([
            'address' => $request->address,
            'title' => $request->title,
            'experience' => $request->experience,
            'technicalskills' => $request->skill,
            'optionalskills' => $request->optional,
            'openings' => $request->opening,
            'otherskills' => $request->editor,
            'qualification' => $request->qualification,
            'benefits' => $request->benefits,
            'salary' => $request->salary,
            'ordering' => $request->ordering,
            'status'=>$request->status,
        ]);
        return redirect()->route('admin.showcareer');
    }

    public function updateoffice(Request $request)
    {

        $this->validate($request, [
            'video' => 'required',
            'thumbnail' => 'mimes:jpeg,png,jpg,svg,webp',
        ]);
        $url = $request->video;
        if (!strpos($url, '/embed/')) {
            $url = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i", "https://www.youtube.com/embed/$1\"", $url);
            $url = trim($url, '"');
        }
        if ($request->has('thumbnail')) {

            $thumbnailpath = $request->file('thumbnail')->store('officethumbnail', ['disk' => 'public']);

            Officevideo::where('id', $request->id)->update([

                'thumbnail' => $thumbnailpath,
                'ordering' => $request->ordering,
                'status'=>$request->status,

            ]);
        } else {
            Officevideo::where('id', $request->id)->update([

                'video' => $url,
                'ordering' => $request->ordering,
                'status'=>$request->status,

            ]);
        }

        return redirect()->route('admin.showofficevideo');
    }
    public function download($id)
    {
        $career = CareerApply::where('id', $id)->firstOrFail();
        $pathToFile = storage_path('app/public/' . $career->cvv);
        return response()->download($pathToFile);
    }


    public function changepassword()
    {
        return view('Admin.changePassword');
    }
    public function storechangepassword(Request $request)
    {

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return back()->with('success', 'Password Change Successfully');
    }
    public function sitemap()
    {

        return response()->view('sitemap', [])->header('Content-Type', 'text/xml');
    }


    public function reorder(Request $request)
    {

        foreach ($request->input('rows', []) as $row) {
            //    dd($row,$i);
            $data = Testimonial::whereId($row['id'])->first();
            $data->ordering = $row['ordering'];
            $data->save();
        }
        return response()->json(['success']);

        return response()->noContent();
    }
    public function portfolioreorder(Request $request)
    {
        foreach ($request->input('rows', []) as $row) {
            //    dd($row,$i);
            // $data = Portfolio::whereId($row['id'])->first();
            // $data->ordering = $row['ordering'];
            // $data->save();

            $data = Portfolio::find($row['id'])->update([
                'ordering' => $row['ordering']
            ]);
            // $data->save();
        }
        return response()->json(['success']);

        return response()->noContent();
    }
    public function clienttestimonialreorder(Request $request)
    {
        foreach ($request->input('rows', []) as $row) {
            //    dd($row,$i);
            // $data = ClientTestimonial::whereId($row['id'])->first();
            // $data->ordering = $row['ordering'];
            // $data->save();

            $data = ClientTestimonial::find($row['id'])->update([
                'ordering' => $row['ordering']
            ]);
        }
        return response()->json(['success']);

        return response()->noContent();
    }

    public function careerreorder(Request $request)
    {
        foreach ($request->input('rows', []) as $row) {


            $data = Career::find($row['id'])->update([
                'ordering' => $row['ordering']
            ]);
        }
        return response()->json(['success']);

        return response()->noContent();
    }
    public function officevideoreorder(Request $request)
    {
        foreach ($request->input('rows', []) as $row) {
            //    dd($row,$i);
            // $data = Officevideo::whereId($row['id'])->first();
            // $data->ordering = $row['ordering'];
            // $data->save();

            $data = Officevideo::find($row['id'])->update([
                'ordering' => $row['ordering']
            ]);
        }
        return response()->json(['success']);

        return response()->noContent();
    }

    public function clientreorder(Request $request)
    {
        foreach ($request->input('rows', []) as $row) {
            //    dd($row,$i);
            $data = Client::whereId($row['id'])->first();
            $data->ordering = $row['ordering'];
            $data->save();
        }
        return response()->json(['success']);

        return response()->noContent();
    }

    public function allblogs(){
        $blogs=Blog::all();
        return view('Admin.showblogs', compact('blogs'),['page' => 'blogs']);
    }

    public function addblog(){
        $category=blogcategory::all();
        $bloguser=bloguser::all();
        return view('Admin.addblog', compact('category','bloguser'),['page' => 'adminblog']);

    }

    public function showblog()
    {

        $data = Blog::select("blogs.*")
                        ->with('blogusers')
                        ->selectRaw('GROUP_CONCAT(blogcategories.category) as category_name')
                        ->join('blogcategories', function($query) {
                            $query->whereRaw("find_in_set(blogcategories.id, blogs.category)");
                        })
                        ->orderBy('id', 'desc')
                        ->groupBy('blogs.id')
                        ->latest();

        if (request()->ajax()) {

            return datatables()->eloquent($data)

                ->addColumn('action', function (Blog $blog) {
                    return '<a href="' . route("admin.editblog", [$blog->id]) . '" class="btn mr-2 "  style="background:#337AB7 !important;color:white"><i class="fas fa-edit"></i>
                                        <a href="javascript:void(0)" onclick="deletePostajax(' . $blog->id . ')" class="btn-danger btn "><i class="fas fa-trash"></i>';
                })

                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('Admin.showblogs', [
            'page' => 'blogs',
        ]);
    }

    public function editblog($id)
    {
        $data = Blog::where('id', $id)->first();
        $category=blogcategory::all();
        $bloguser=bloguser::all();
        return view('Admin.blogedit', compact('data', 'category','bloguser'), ['page' => 'adminblog']);
    }
    public function updateblog(Request $request)
    {

        // print_r(json_encode($request->all()));
        // exit();
        $this->validate($request, [
            'title' => 'required',
            'editor1' => 'required',
            'category' => 'required',
            'bloguser' =>'required',
            'time'=>'required',
        ]);

        $dt = Carbon::now();
        $date= $dt->toFormattedDateString();
        $categoryname = implode(',', $request->category);

        $thumbnailimage = $coverimage = '';
        if ($request->has('thumbnail')) {
            $name = $request->file('thumbnail')->getClientOriginalName();
            $thumbnailpath = $request->file('thumbnail')->store('blogthumbnail', ['disk' => 'public']);
            $thumbnailimage = $thumbnailpath;
        }
        if ($request->has('coverimage')) {
            $name = $request->file('coverimage')->getClientOriginalName();
            $coverpath = $request->file('coverimage')->store('blogcoverimage', ['disk' => 'public']);
            $coverimage = $coverpath;
        }

        $record = Blog::whereId($request->id)->first();
        $record->title = $request->title;
        // $record->blogdate = $date;
        $record->description = $request->editor1;
        $record->username = Auth::user()->name;
        $record->ordering = $request->ordering;
        $record->category = implode(",", $request->category);
        $record->bloguser = $request->bloguser;
        $record->time = $request->time;
        $record->status=$request->status;
        $record->seo_description=$request->seodescription;
        $record->seo_keyword=$request->seokeyword;
        
        $record->slug=Str::slug($request->title,'-');

        if($thumbnailimage != ''){
            $record->thumbnail = $thumbnailimage;
        }
        if($coverimage != ''){
            $record->coverimage = $coverimage;
        }

        $record->save();


        return redirect()->route('admin.showblog');
    }

    public function deleteblog($id)
    {
        $data = Blog::find($id)->delete();
        return response()->json(['success' => 'Record deleted']);
    }

    public function saveblog(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'coverimage' => 'required|mimes:jpeg,png,jpg,svg,webp',
            'title' => 'required',
            'editor1' => 'required',
            'category' => 'required',
            'bloguser' =>'required',
            'time'=>'required',
        ]);
        $dt = Carbon::now();
        $date= $dt->toFormattedDateString();
        $categoryname = implode(',', $request->category);


        if($request->thumbnail == '')
        {

            $item = $request->file('coverimage');

            $filename = $item->hashName();

            $fileExtension = $item->guessClientExtension();

            $realPath = storage_path('/app/public/blogthumbnail/' . $filename);

            $NewfileName = 'blogthumbnail/' . $filename;
            // dd($NewfileName);
            //resize images
            Image::make($item->getRealPath())->resize(100, 100)->encode($fileExtension, 80)->save($realPath);
            // Image::make($item->getRealPath())->save($realPath, 100);
         


            $coverimage = $request->file('coverimage')->store('blogcoverimage', ['disk' => 'public']);
            $blog = blog::create([

                'title' => $request->title,
                'blogdate' =>$date,
                'description' => $request->editor1,
                'coverimage' => $coverimage,
                'username' => Auth::user()->name,
                'ordering' => $request->ordering,
                'category'=>$categoryname,
                'bloguser'=>$request->bloguser,
                'thumbnail'=>$NewfileName,
                'time'=>$request->time,
                'seo_description'=>$request->seodescription,
                'seo_keyword'=>$request->seokeyword
            ]);
        }

      else{

        $thumbnail = $request->file('thumbnail')->store('blogthumbnail', ['disk' => 'public']);
        $coverimage = $request->file('coverimage')->store('blogcoverimage', ['disk' => 'public']);

        $blog = blog::create([

            'title' => $request->title,
            'blogdate' =>$date,
            'description' => $request->editor1,
            'coverimage' => $coverimage,
            'username' => Auth::user()->name,
            'ordering' => $request->ordering,
            'category'=>$categoryname,
            'bloguser'=>$request->bloguser,
            'thumbnail'=>$thumbnail,
            'time'=>$request->time,
        ]);
      }
  
    return redirect(route('admin.blogs'));

    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            
            $store=$request->file('upload')->store('blogimages', ['disk' => 'public']);
            // dd($store);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/'.$store);
            // dd($url);
            // $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function addblogcategory(){
        return view('Admin.BlogCategory.blogcategory', ['page' => 'adminblogcategory']);
    }
    public function saveblogcategory(Request $request){
        $blog = blogcategory::create([

            'category' => $request->category,

        ]);
        return redirect(route('admin.showblogcategory'));
     
    }
    public function addbloguser(){
        return view('Admin.bloguser', ['page' => 'adminbloguser']);
    }
    public function savebloguser(Request $request){
        $blog = bloguser::create([

            'username' => $request->username,
        ]);
        return redirect(route('admin.showbloguser'));
    }
}

