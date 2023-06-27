@extends('layout.admin.admin')

@section('title')




<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Add Blog</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="#" onclick="history.back();" class="btn text-white" style="    background: #337AB7 !important;
    color: white;">Back</a>
        </li>

    </ol>
</div>
@endsection
@section('content')

<div class="form-wrap">
    <form action="{{route('admin.saveblog')}}" method="POST" enctype="multipart/form-data">
        @routes
        @csrf
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <li>{{$errors->first()}}</li>
            </ul>
        </div>
        @endif
        <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>CoverImage</b></label>
                        <input type="file" id="coverimage" name="coverimage" class="form-control-file" placeholder="Enter Image" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>ThumbnailImage</b></label>
                        <input type="file" id="thumbnail" name="thumbnail" class="form-control-file" placeholder="Enter Image">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>Title</b></label>
                        <input type="text" id="title" name="title" class="form-control col-6" placeholder="Enter Title" value="{{old('title')}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>Description</b></label>
                        <!-- <textarea id="description" name="description" class="form-control col-6" placeholder="Enter Description"></textarea> -->
                        <textarea name="editor1" >{{ old('editor1') }}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Category</b></label>

                        <select class="selectpicker col-12" multiple data-live-search="true" name="category[]">

                            @foreach($category as $item)
                            <option value="{{$item->id}}" {{ old('category[]') == $item->id ? "selected" :""}}>{{$item->category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>Blog User</b></label>
                        <select name='bloguser' class="form-control col-6">
                            @foreach ($bloguser as $user)
                            <option value="{{$user->id}}" {{ old('bloguser') == $user->id ? "selected" :""}}>{{$user->username}}</option>
                            @endforeach
                        <select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Time</b></label>
                        <input type="text" id="time" name="time" class="form-control" placeholder="Enter Time" value="{{ old('time') }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>SEO Description</b></label>
                        <input type="text" id="seodescription" name="seodescription" class="form-control" placeholder="Enter SeoDescription" value="{{ old('seodescription') }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>SEO Keyword</b></label>
                        <input type="text" id="seokeyword" name="seokeyword" class="form-control" placeholder="Enter SeoKeyword" value="{{ old('seokeyword') }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Ordering</b></label>
                        <input type="text" id="ordering" name="ordering" class="form-control" placeholder="Enter Ordering" value="{{ old('ordering') }}">
                    </div>
                </div>

            </div>
        </div>

        <div class="form-actions mt-10 mb-10">
            <button type="submit" class="btn mr-10 mb-4" style="background-color: #337AB7 !important;color: white;"> Save</button>
        </div>
    </form>
</div>


<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.7.3/full-all/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection