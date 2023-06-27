@extends('layout.admin.admin')

@section('title')


<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Edit Category Blog</h1>
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
  <form action="{{route('admin.updateblogcategory')}}" method="POST" enctype="multipart/form-data">
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
                        <label class="control-label mb-10" for="category"><b>Category</b></label>
                        <input type="text" id="category" name="category" class="form-control col-6" placeholder="Enter Title" value="{{$data->category}}">
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
