<?php

namespace App\Http\Controllers\Admin;

use App\Models\blog;
use App\Models\blogcategory;
use App\Models\bloguser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\comment;

class BlogController extends Controller
{
    public function showblogcategory()
    {

        $data = blogcategory::orderBy('id', 'desc')->latest();

        if (request()->ajax()) {

            return datatables()->eloquent($data)

                ->addColumn('action', function (BlogCategory $blogcategory) {
                    return '<a href="' . route("admin.editblogcategory", [$blogcategory->id]) . '" class="btn mr-2 "  style="background:#337AB7 !important;color:white"><i class="fas fa-edit"></i>
                                        <a href="javascript:void(0)" onclick="deletePostajax(' . $blogcategory->id . ')" class="btn-danger btn "><i class="fas fa-trash"></i>';
                })

                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('Admin.BlogCategory.showblogcategory', [
            'page' => 'showblogcategory',
        ]);
    }

    public function editblogcategory($id)
    {
        $data = blogcategory::where('id', $id)->first();
        return view('Admin.BlogCategory.blogcategoryedit', compact('data'), ['page' => 'adminblogcategory']);
    }
    public function updateblogcategory(Request $request)
    {

        $this->validate($request, [
            'category' => 'required',
        ]);


        $record = blogcategory::whereId($request->id)->first();
        $record->category = $request->category;
        $record->save();


        return redirect()->route('admin.showblogcategory');
    }

    public function deleteblogcategory($id)
    {
        $data = blogcategory::find($id)->delete();
        return response()->json(['success' => 'Record deleted']);
    }

    // ==================BLOG USER====================================

    public function showbloguser()
    {

        $data = bloguser::orderBy('id', 'desc')->latest();
        
        if (request()->ajax()) {

            return datatables()->eloquent($data)

                ->addColumn('action', function (Bloguser $bloguser) {
                    return '<a href="' . route("admin.editbloguser", [$bloguser->id]) . '" class="btn mr-2 "  style="background:#337AB7 !important;color:white"><i class="fas fa-edit"></i>
                                        <a href="javascript:void(0)" onclick="deletePostajax(' . $bloguser->id . ')" class="btn-danger btn "><i class="fas fa-trash"></i>';
                })

                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('Admin.BlogUser.showbloguser', [
            'page' => 'showbloguser',
        ]);
    }

    public function editbloguser($id)
    {
        $data = bloguser::where('id', $id)->first();
        return view('Admin.BlogUser.bloguseredit', compact('data'), ['page' => 'adminbloguser']);
    }
    public function updatebloguser(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
        ]);


        $record = bloguser::whereId($request->id)->first();
        $record->username = $request->username;
        $record->save();


        return redirect()->route('admin.showbloguser');
    }

    public function deletebloguser($id)
    {
        $data = bloguser::find($id)->delete();
        return response()->json(['success' => 'Record deleted']);
    }
    public function deleteblogcomment($id){
        $data = comment::find($id)->delete();
        return response()->json(['success' => 'Record deleted']);
    }
    public function showblogcomment(){
        $comments = comment::with('replies')->where('parent_comment_id', 0)->orderBy('created_at', 'DESC')->get();
        return view('Admin.showblogcomment',compact('comments'), ['page' => 'showblogcomment']);
    }

}
