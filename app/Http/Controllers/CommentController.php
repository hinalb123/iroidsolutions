<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\comment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        //  dd($request->all());
       
            $comment = comment::create([
                'name' => $request->name,
                'email' => $request->email,
                'blog_id' => $request->blog_id,
                'parent_comment_id' => $request->parent_comment_id,
                'comment' => $request->comment
            ]);
    
      
            // return json_encode(['success' => true, 'last_insert_id' => $comment->id], 200);

        // return json_encode($comment->parent_comment_id);
        return json_encode($comment->id);
    }

    public function blogdata(Request $request)
    {

        $data = blog::with('blogusers')->simplePaginate(2);

        if ($request->ajax()) {

            if($request->category){
                $category=$request->category;
                $data = blog::with('blogcategorys','blogusers')->whereHas('blogcategorys', function (Builder $query) use($category){
                    $query->where('category', 'like', '%' .$category. '%');
                })->paginate(2);

            }
        }
        else{

        }
        return view('pagination_child', compact('data'))->render();
    }

    public function blogdetailpage($id)
    {
        $data = blog::with('blogusers')->find($id);
        // $recentPosts = blog::where(DB::RAW("FIND_IN_SET([$data->category], category)"), '!=', null)->get();
        $recentPosts = blog::whereIn('category',array_map('intval', explode(',', $data->category)))->where('id','!=',$data->id)->get();

        if(count($recentPosts) < 1){
            $recentPosts = blog::where('id','!=',$data->id)->inRandomOrder()->limit(4)->get();
        }

        return view('blogdetailpage', compact('data','recentPosts'));
        // return view('blogdetailpage');
    }

    public function blogetailpagestatic()
    {
        return view('blogetailpagestatic');
    }
}
