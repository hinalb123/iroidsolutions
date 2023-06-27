<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blogcategory;
use App\Models\ClapBlog;
use App\Models\comment;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{

    public function blogdata(Request $request,blog $blog)
    {
        $blogcategory = blogcategory::all();
        return view('blogpage', compact('blogcategory'),[
            'tag' => $blog
        ]);
    }

    public function blogpage(Request $request)
    {
       
        $blogcategory = blogcategory::all();
        $text=$request->text;
       
        $categoryid=$request->categoryid;
        // dd($categoryid);
        // $blogcategory = blogcategory::all();
        $data = blog::select('blogs.*')->with('blogusers')
            ->selectRaw('GROUP_CONCAT(blogcategories.category) as categoryName')
            ->join('blogcategories', function ($query) {
                $query->whereRaw("find_in_set(blogcategories.id, blogs.category)");
            })
            ->where(function ($query) use ($text,$categoryid) {
				
                if($categoryid != '-1' && $categoryid){
                    // $query->where('find_in_set(blogs.category,$categoryid)');
                    $query->whereRaw('FIND_IN_SET('. $categoryid . ',blogs.category)');
                }
				if ($text != '') {
					$query->where('title','like',$text.'%');
				}
			})

            ->groupBy('blogs.id')->orderby('created_at', 'DESC')
            ->where('status','=','1')->paginate(6);
            
        return response()->json($data);
    }



    public function blogdetailpage($slug,Request $request)
    {
        
        // $id = Session::get('id1');
        $blogtitle = blog::where('slug',$slug)->pluck('slug')[0];
        $blogtitle  = str_replace('-', ' ', $blogtitle );

        $data = blog::with('blogusers')->where('slug',$slug)->first();
     
        $recentPosts = blog::whereIn('category', array_map('intval', explode(',', $data->category)))->where('id', '!=', $data->id)->where('status','=','1')->get();
        if (count($recentPosts) < 1) {
            $recentPosts = blog::where('id', '!=', $data->id)->inRandomOrder()->where('status','=','1')->limit(4)->get();
        }

        $comments = comment::where('blog_id', $data->id)->with('replies')->where('parent_comment_id', 0)->orderBy('created_at', 'DESC')->get();


        return view('blogdetailpage', compact('data', 'recentPosts', 'comments','blogtitle'));
        
        // return view('blogdetailpage');
    }

    public function contentpage($slug,Request $request)
    {
        
        $data = blog::with('blogusers')->where('slug',$slug)->first();
       
        return view('layout.content', compact('data'));
    }

    public function portfoliopage($slug,Request $request)
    {
        
       
        $data = blog::with('blogusers')->where('slug',$slug)->first();

        return view('portfolio', compact('data'));
    }
    public function contactpage($slug,Request $request)
    {
        
       
        $data = blog::with('blogusers')->where('slug',$slug)->first();

        return view('contact', compact('data'));
    }
    
    public function blog($id,Request $request)
    {
        
        Session::put('id1', $id);
        $blogtitle = blog::where('slug',$id)->pluck('slug')[0];
        $blogtitle  = str_replace(' ', '-', $blogtitle );
        $blogtitle = preg_replace('/[^A-Za-z0-9\-]/', '', $blogtitle);
        return \Redirect::route('bloagdetailpage', [$blogtitle]);
        // return view('blogdetailpage', compact('data', 'recentPosts', 'comments'));
        // return view('blogdetailpage');
    }


    // public function blogetailpagestatic()
    // {
    //     return view('blogetailpagestatic');
    // }

    public function blogsearch(Request $request)
    {
        $data = blog::select('blogs.*')->where('title', $request->text)->with('blogusers')
            ->selectRaw('GROUP_CONCAT(blogcategories.category) as categoryName')
            ->join('blogcategories', function ($query) {
                $query->whereRaw("find_in_set(blogcategories.id, blogs.category)");
            })
            ->has('blogusers')
            ->groupBy('blogs.id')->orderby('created_at', 'DESC')
            ->simplePaginate(6);
        // return view('blogpage', compact('blogcategory','data'));
        return response()->json($data);


        // return view('blogpage',compact('data'));
    }

    public function blogclap(Request $request){
        // dd($request->all());
        

        if (ClapBlog::where('blog_id', $request->blog_id )->exists())
          {
            
            $clap=ClapBlog::where('blog_id',$request->blog_id)->increment('count', 1);
            $clap=ClapBlog::where('blog_id',$request->blog_id)->first();

          }else{
          
                $clap = ClapBlog::create([

                    'blog_id' => $request->blog_id,
                    'count' => $request->countblog,
                    
                ]);
            }
           
     
            return json_encode($clap);

    }
    public function blogclapshow(Request $request){
       
            $clap=ClapBlog::where('blog_id',$request->blog_id)->first();
            return json_encode($clap);

    }

}
