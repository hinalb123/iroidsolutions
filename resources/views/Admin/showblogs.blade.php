@extends('layout.admin.admin')

@section('title')
<!-- <h1 class="mt-4">Portfolio</h1> -->
<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Blogs</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <form action="{{route('admin.blog')}}" method="GET">
                <div>
                    <input type="submit" value="Add Blog" style="background: #337AB7 !important;
    color: white;" class="btn text-white">
                </div>
            </form>
        </li>

    </ol>
</div>


@endsection
@section('content')


<div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example3" class="table table-bordered table-striped">
                    @routes
                    <thead>
                        <tr style="font-family: Work Sans, sans-serif;">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>

            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.25.1/moment.min.js"></script>
    <script src="{{ asset('dist/js/demo.js')}}"></script>

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
                        url: route('admin.deleteblog', id),
                        data: {
                            _token: CSRF_TOKEN
                        },
                        dataType: 'JSON',
                        success: function(results) {
                            $('#example3').DataTable().ajax.reload();
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


    <script>
        $(document).ready(function() {
            var datatable = $("#example3").DataTable({
                responsive: true,
                "autoWidth": false,
                fixedColumns: false,
                processing: true,
                serverSide: true,
                retrieve: true,
                "paging": true,

                ajax: {
                    type: "GET",
                    url: route('admin.showblog'),
                    // success: (response) => {
                    //     console.log("response: " + JSON.stringify(response));
                    //     exit();
                    // },
                    "error": function(response) {
                        // console.log("error : " + JSON.stringify(response));
                        // exit();
                        if (response.status == 401) {
                            window.location.href = `{{ route('admin.login') }}`
                        }


                    },
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id',
                        className: 'reorder',
                        searchable: false,
                    },
                    {
                        data: 'title',
                        defaultContent: '',
                        name: 'title',
                        render: function(data, type, row) {
                            return row.title
                        }

                    },
                    {
                        data: 'created_at',
                        defaultContent: '',
                        name: 'created_at',
                        render: function(data, type, row) {
                            return  moment(row.created_at).format('DD MMM YYYY');
                    }
                    },
                    {
                        data: 'category_name ',
                        defaultContent: '',
                        name: 'category_name ',
                        render: function(data, type, row) {
                            return row.category_name
                        }
                    },
                                     {
                        data: 'username ',
                        defaultContent: '',
                        name: 'username ',
                        render: function(data, type, row) {

                            if(row.blogusers != null){
                                return row.blogusers.username
                            }
                        }
                    },
                    {
                        data: 'status ',
                        defaultContent: '',
                        name: 'status ',
                        render: function(data, type, row) {
                            // return row.status
                            if(row.status=='1'){
                                return "show";
                            }
                            else{
                                return "hide";
                            }
                        }
                    },

                    {
                        data: 'action',
                        defaultContent: '',
                        name: 'action'
                    }
                ],
            });

        });
    </script>

    @endsection
