@extends('layout.admin.admin')

@section('title')


<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Edit Career</h1>
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
    <form action="{{route('admin.updatecareer')}}" method="POST" enctype="multipart/form-data">
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
                <input type="hidden" name="id" value="{{$data->id}}">

             
                <div class="col-md-12 ">
                    <div class="form-group col-lg-12 col-sm-12 col-md-12 ">
                        <label class="control-label mb-10 " for="feature"><b>Title</b></label>
                        <input type="text" id="title" name="title" class="form-control col-6 " placeholder="Enter Title" value="{{$data->title}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-6">
                        <label class="control-label mb-10" for="feature"><b>Experience</b></label>
                        <!-- <input type="text" id="experience" name="experience" class="form-control col-6" placeholder="Enter Experience" value="{{old('experience')}}"> -->
                        <textarea name="experience" id="editor0" rows="10" cols="80">
                        {{$data->experience}}
                        </textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-6">
                        <label class="control-label mb-10" for="feature"><b>Technical Skills</b></label>
                        <!-- <input type="text" id="skill" name="skill" class="form-control col-6" placeholder="Enter Technical Skills" value="{{old('skill')}}"> -->
                        <textarea name="skill" id="editor" rows="10" cols="80">
                        {{$data->technicalskills}}

                        </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-6">
                        <label class="control-label mb-10" for="feature"><b>Optional Skills</b></label>
                        <!-- <input type="text" id="optional" name="optional" class="form-control col-6" placeholder="Enter Optional Skills" value="{{old('optional')}}"> -->
                        <textarea name="optional" id="editor1" rows="10" cols="80" class="col-6">
                        {{$data->optionalskills}}
                        </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-12">
                        <label class="control-label mb-10" for="feature"><b>Openings</b></label>
                        <input type="text" id="opening" name="opening" class="form-control col-6" placeholder="Enter Openings" value="{{$data->openings}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-12">
                        <label class="control-label mb-10" for="feature"><b>Salary</b></label>
                        <input type="text" id="salary" name="salary" class="form-control col-6" placeholder="Enter Salary" value="{{$data->salary}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-6">
                        <label class="control-label mb-10" for="feature"><b>Other Skills</b></label>
                        <!-- <textarea id="otherskill" name="otherskill" class="form-control col-6" placeholder="Enter Other Skills" rows="5" cols="10" value="{{old('otherskill')}}"></textarea> -->
                        <textarea name="editor" id="editor3" rows="10" cols="80">
                        {{$data->otherskills}}
                        </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-12">
                        <label class="control-label mb-10" for="feature"><b>Qualification</b></label>
                        <input type="text" id="qualification" name="qualification" class="form-control col-6" placeholder="Enter Qualification" value="{{$data->qualification}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group col-6">
                        <label class="control-label mb-10" for="feature"><b>Benefits</b></label>
                        <!-- <input type="text" id="benefits" name="benefits" class="form-control col-6" placeholder="Enter Benefits" value="{{old('benefits')}}"> -->
                        <textarea name="benefits" id="editor2" rows="10" cols="80">
                        {{$data->benefits}}
                        </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-12">
                        <label class="control-label mb-10" for="feature"><b>Address</b></label>
                        <input type="text" id="address" name="address" class="form-control col-6" placeholder="Enter Address" value="{{$data->address}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-12">
                        <label class="control-label mb-10" for="feature"><b>Status</b></label>
                        <input type="text" id="address" name="status" class="form-control col-6" placeholder="Enter Status" value="{{$data->status}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group col-lg-12">
                        <label class="control-label mb-10" for="feature"><b>Ordering</b></label>
                        <input type="text" id="ordering" name="ordering" class="form-control col-6" placeholder="Enter Ordering" value="{{$data->ordering}}">
                    </div>
                </div>

            </div>
        </div>

        <div class="form-actions mt-10">
            <button type="submit" class="btn mr-10 my-3" style="background-color: #337AB7 !important;color: white;"> Save</button>
        </div>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('select').selectpicker();

    });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor2'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor3'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor0'))
        .catch(error => {
            console.error(error);
        });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
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