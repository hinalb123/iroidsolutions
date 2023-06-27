@extends('layout.admin.admin')

@section('title')
<h3 class="">Contact Us</h3>
@endsection
@section('content')
<!-- <div class="row">

</div> -->


<div class="row col-12 ">
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
                    <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>PhoneNumber</th>
                            <th>Message </th>
                            <th>Date</th>
                          

                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($contact as $val)
                        <tr id="uid{{$val->id}}">
                            <td>{{$val->id}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->email}}</td>
                            <td>{{$val->phone}}</td>
                            <td>{{$val->message}}</td>
                            <td>{{$val->created_at}}</td>
                      

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
    // $(function() {
    //   $("#example1").DataTable({
    //     "responsive": true,
    //     "lengthChange": false,
    //     "autoWidth": false,
    //     "ordering": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print"]
    //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //   $('#example2').DataTable({
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": true,
    //     "ordering": false,
    //     "info": true,
    //     "autoWidth": true,
    //     "responsive": true,
    //   });
    // });

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
    