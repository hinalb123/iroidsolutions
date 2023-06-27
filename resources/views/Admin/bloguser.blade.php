@extends('layout.admin.admin')

@section('title')




<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Add Blog User</h1>
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
    <form action="{{route('admin.savebloguser')}}" method="POST">
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
                        <label class="control-label mb-10" for="feature"><b>Username</b></label>
                        <input type="text" id="username" name="username" class="form-control col-6" placeholder="Enter UserName">
                    </div>
                </div>

            </div>
        </div>

        <div class="form-actions mt-10">
            <button type="submit" class="btn mr-10" style="background-color: #337AB7 !important;color: white;"> Save</button>
        </div>
    </form>
</div>


<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>

@endsection
