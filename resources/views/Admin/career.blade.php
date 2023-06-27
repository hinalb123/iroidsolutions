@extends('layout.admin.admin')

@section('title')
<h3 class="">Career Application</h3>
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
                <table id="example1" class="table table-bordered table-striped ">
                    @routes
                    <thead>
                        <tr style="font-family: Work Sans, sans-serif;">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>PhoneNumber</th>
                            <th>Cv</th>
                            <th>Career</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($career as $val)
                        <tr id="cid{{$val->id}}">
                            <td>{{$val->    id}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->email}}</td>
                            <td>{{$val->phonenumber}}</td>
                            <td><a href="{{ route('career.download', $val->id) }}">{{$val->cvv}}</a></td>
                            @if(!$val->career_data)
                            <td>Internship</td>
                            @else
                            <td>{{$val->career_data->title}}</td>
                            @endif
                            <td>{{$val->created_at}}</td>
                            <td> <a href="javascript:void(0)" onclick="deletePostajax({{$val->id}})" class="btn-danger btn mr-2"><i class="fas fa-trash"></i>
                            </td>
                            <!-- <td>{{$val->career_data?$val->career_data->title:''}}</td> -->
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
                text: "Are you sure? want to delete this Career Application?",
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
                        url: route('admin.deletecareerapplication', id),
                        data: {
                            _token: CSRF_TOKEN
                        },
                        dataType: 'JSON',
                        success: function(results) {
                            console.log("success");
                            $("#cid" + id).remove();
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

