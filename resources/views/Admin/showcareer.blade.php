@extends('layout.admin.admin')


@section('title')


<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">New Opening</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <form action="{{route('admin.careerform')}}" method="GET">
                <div>
                    <input type="submit" value="Add Career" style="background: #337AB7 !important;
    color: white;" class="btn text-white">
                </div>
            </form>
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
                          
                            <th>Title</th>
                            <th>Experience</th>
                            <th>Technicalskills</th>
                            <th>Optionalskills</th>
                            <th>Openings</th>
                            <th>Otherskills</th>
                            <th>Qualification</th>
                            <th>benefits</th>
                            <th>Salary</th>
                            <th>Address</th>
                            <th>Ordering</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($career as $val)
                        <tr id="cid{{$val->id}}">
                            <td>{{$val->id}}</td>
                            
                            <td>{{$val->title}}</td>
                            <td>{!! strip_tags($val->experience) !!}</td>
                            <td><?php echo htmlspecialchars_decode($val->technicalskills) ?></td>
                            <td><?php echo htmlspecialchars_decode($val->optionalskills) ?></td>
                            <td>{!! strip_tags($val->openings)!!}</td>
                            <td><?php echo htmlspecialchars_decode($val->otherskills)?></td>
                            <td>{!! strip_tags($val->qualification)!!}</td>
                            <td><?php echo htmlspecialchars_decode($val->benefits)?></td>
                            <td>{{$val->salary}}</td>
                            <td>{{$val->address}}</td>
                            <td>{{$val->ordering}}</td>
                            <td>
                            <a href="javascript:void(0)" onclick="deletePostajax({{$val->id}})" class="btn-danger btn mr-2"><i class="fas fa-trash"></i>
                           <a href="{{route('admin.editcareer',[$val->id])}}" class="btn-primary btn mr-2 mt-1"  style="background:#337AB7 !important;color:white"><i class="fas fa-edit" ></i>
                            
                        
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
                text: "Are you sure? want to delete this Career?",
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
                        url: route('admin.deletecareer', id),
                        data: {
                            _token: CSRF_TOKEN
                        },
                        dataType: 'JSON',
                        success: function(results) {

                            $("#cid" + id).remove();
                            // $('#cid').DataTable().ajax.reload();
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