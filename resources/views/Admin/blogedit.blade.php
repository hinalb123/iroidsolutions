@extends('layout.admin.admin')

@section('title')


<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Edit Blog</h1>
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
  <form action="{{route('admin.updateblog')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @routes
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        <li>{{$errors->first()}}</li>
      </ul>
    </div>
    @endif
    <div class="form-body">

        <div class="form-body">
            <div class="row">
                <input type="hidden" name="id" value="{{$data->id}}">

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>CoverImage</b></label>
                        <img height="100px" width="100px" src="{{url(Storage::url($data->coverimage))}}" alt="">
                        <input type="file" id="coverimage" name="coverimage" class="form-control-file" placeholder="Enter Image" value="{{$data->coverimage}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>ThumbnailImage</b></label>
                        <img height="100px" width="100px" src="{{url(Storage::url($data->thumbnail))}}" alt="">
                        <input type="file" id="thumbnail" name="thumbnail" class="form-control-file" placeholder="Enter Image" value="{{$data->thumbnail}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>Title</b></label>
                        <input type="text" id="title" name="title" class="form-control col-6" placeholder="Enter Title" value="{{$data->title}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>Description</b></label>
                        <!-- <textarea id="description" name="description" class="form-control col-6" placeholder="Enter Description"></textarea> -->
                        <textarea name="editor1" >{{$data->description}}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Category</b></label>

                        <select class="selectpicker col-12" multiple data-live-search="true" name="category[]">

                            @foreach($category as $item)

                                @php $selected=''; @endphp
                                @if (in_array($item->id, explode(",",$data->category)))
                                    @php $selected="selected"; @endphp
                                @endif

                                <option value="{{$item->id}}" {{ $selected }}>{{$item->category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>Blog User</b></label>
                        <select name='bloguser' class="form-control col-6">

                        @foreach($bloguser as $item)
                     
                        <option value="{{$item->id}}" {{ ($item->id == $data->bloguser) ? 'selected' : '' }}>{{$item->username}}</option>
                        @endforeach


                            <!-- @foreach ($bloguser as $user)
                                @php $selected=''; @endphp
                                @if ($user->username == $data->username)
                                    @php $selected="selected"; @endphp
                                @endif
                                <option value="{{$user->id}}">{{$user->username}}</option>
                            @endforeach -->
                        <select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Time</b></label>
                        <input type="text" id="time" name="time" class="form-control" placeholder="Enter Timeing" value="{{ $data->time}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Status</b></label>
                        <input type="number" id="status" name="status" class="form-control" placeholder="Enter Status" value="{{ $data->status}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>SEO Description</b></label>
                        <input type="text" id="seodescription" name="seodescription" class="form-control" placeholder="Enter SeoDescription" value="{{ $data->seo_description }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>SEO Keyword</b></label>
                        <input type="text" id="seokeyword" name="seokeyword" class="form-control" placeholder="Enter SeoKeyword" value="{{ $data->seo_keyword }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Ordering</b></label>
                        <input type="number" id="ordering" name="ordering" class="form-control" placeholder="Enter Ordering" value="{{ $data->ordering}}">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="form-actions mt-10">
      <button type="submit" class="btn mr-10" style="background-color: #337AB7 !important;color: white;"> Save</button>
    </div>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.7.3/full-all/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });

  function confirm() {
    swal({
      title: "Sign Out?",
      text: "Are you sure? want to Sign Out?",
      type: "warning",
      showCancelButton: !0,
      confirmButtonText: "Yes, Do it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: !0
    }).then(function(e) {

      if (e.value === true) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
          type: 'POST',
          url: route('logout'),
          data: {
            _token: CSRF_TOKEN
          },
          dataType: 'JSON',
          success: function(results) {
            window.location.reload();

          }
        });

      } else {
        e.dismiss;
      }

    }, function(dismiss) {
      return false;
    })
  }
</script>

@endsection
