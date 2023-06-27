@extends('layout.admin.admin')


@section('title')


<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">New Opening</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <!-- <form action="{{route('admin.careerform')}}" method="GET">
                <div>
                    <input type="submit" value="Add Career" style="background: #337AB7 !important;
    color: white;" class="btn text-white">
                </div>
            </form> -->
        </li>

    </ol>
</div>

@endsection
@section('content')





<div class="row col-12">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    @routes
                    <thead>
                        <tr style="font-family: Work Sans, sans-serif;">
                            <th>Id</th>
                          
                            <th>Name</th>
                            <th>Comment</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($comments as $val)
                        <tr id="cid{{$val->id}}">
                            <td>{{$val->id}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->comment}}</td>
                        
                            <td>
                            <a href="javascript:void(0)" onclick="deletePostajax({{$val->id}})" class="btn-danger btn mr-2"><i class="fas fa-trash"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.col -->

        <!-- /.content -->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>

    <script>
        function deletePostajax(id)

        {

            swal({
                title: "Delete?",
                text: "Are you sure? want to delete this Blog?",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function(e) {

                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        type: 'GET',
                        url: route('admin.deleteblogcomment', id),
                        data: {
                            _token: CSRF_TOKEN
                        },
                        dataType: 'JSON',
                        success: function(results) {
                            $("#cid" + id).remove();
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