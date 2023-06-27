@extends('layout.admin.admin')

@section('title')


<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;"> Portfolio</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <a href="#" onclick="history.back();" class="btn text-white" style="background: #337AB7 !important;
    color: white;">Back</a>
        </li>

    </ol>
</div>

@endsection
@section('content')


<div class="form-wrap">
    <form action="{{route('admin.saveportfolio')}}" method="POST" enctype="multipart/form-data">
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
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>ProjectName</b></label>
                        <input type="text" id="projectname" name="projectname" class="form-control" placeholder="Enter ProjectName" value="{{old('projectname')}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Category</b></label>

                        <select class="selectpicker col-12" multiple data-live-search="true" name="category[]">

                            @foreach($category as $item)
                            <option value="{{$item->id}}" {{ old('category[]') == $item->id ? "selected" :""}}>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>AndroidLink</b></label>
                        <input type="text" id="androidlink" name="androidlink" class="form-control" placeholder="Enter AndriodLink" value="{{old('androidlink')}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>IosLink</b></label>
                        <input type="text" id="ioslink" name="ioslink" class="form-control" placeholder="Enter IosLink" value="{{old('ioslink')}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>WebLink</b></label>
                        <input type="text" id="weblink" name="weblink" class="form-control" placeholder="Enter WebLink" value="{{old('weblink')}}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label mb-10" for="feature"><b>Image</b></label>
                        <input type="file" id="thumbnail" name="thumbnail" class="form-control-file" placeholder="Enter Image" value="{{old('thumbnail')}}" accept="image/png, image/gif, image/jpeg">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-6">
                        <label class="control-label mb-10" for="feature"><b>Ordering</b></label>
                        <input type="text" id="ordering" name="ordering" class="form-control" placeholder="Enter Ordering" value="{{old('ordering')}}">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-actions mt-10">
            <button type="submit" class="btn  mr-10" style="background-color: #337AB7 !important;color: white;"> Save</button>
        </div>
    </form>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('select').selectpicker();

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