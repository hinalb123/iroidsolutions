@extends('layout.admin.admin')

@section('title')
<!-- <h1 class="mt-4">Portfolio</h1> -->
<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Portfolio</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <form action="{{route('admin.portfolio')}}" method="GET">
                <div>
                    <input type="submit" value="Add Portfolio" style="background: #337AB7 !important;
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
                            <th>Project Name</th>
                            <th>Category</th>
                            <th>Android Link</th>
                            <th>Ios Link</th>
                            <th>Web Link</th>
                            <th>Image</th>
                            <th>Ordering</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                </table>

            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('dist/js/demo.js')}}"></script>

    <script>
        function deletePostajax(id)

        {

            swal({
                title: "Delete?",
                text: "Are you sure? want to delete this Portfolio?",
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
                        url: route('admin.deleteportfolio', id),
                        data: {
                            _token: CSRF_TOKEN
                        },
                        dataType: 'JSON',
                        success: function(results) {

                            // $("#pid" + id).remove();
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
                    url: route('admin.showportfolio'),
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
                        data: 'projectname',
                        defaultContent: '',
                        name: 'projectname',
                        render: function(data, type, row) {
                            return row.projectname
                        }

                    },
                    {
                        data: 'category',
                        defaultContent: '',
                        name: 'category',
                        render: function(data, type, row) {
                            return row.name
                        }
                    },
                    {
                        data: 'androidlink ',
                        defaultContent: '',
                        name: 'androidlink ',
                        render: function(data, type, row) {
                            return row.androidlink
                        }
                    },

                    {
                        data: 'ioslink ',
                        defaultContent: '',
                        name: 'ioslink ',
                        render: function(data, type, row) {
                            return row.ioslink
                        }
                    },
                    {
                        data: 'weblink ',
                        defaultContent: '',
                        name: 'weblink ',
                        render: function(data, type, row) {
                            return row.weblink
                        }
                    },
                    {
                        data: 'thumbnail ',
                        defaultContent: '',
                        name: 'thumbnail ',
                        render: function(data, type, row) {
                            if (row.thumbnail != '') {
                                return `<img src="{{url('storage')}}/${row.thumbnail}" class="l-image" style="width:100px;height:100px;">`;
                            } else {
                                return '-';
                            }
                        }
                    },
                    {
                        data: 'ordering',
                        defaultContent: '',
                        name: 'ordering',
                        render: function(data, type, row) {
                            return row.ordering
                        }
                    },
                    {
                        data: 'action',
                        defaultContent: '',
                        name: 'action'
                    }
                ],
                // rowReorder: {

                //     selector: 'tr td:not(:nth-child(1),:last-of-type)',
                //     dataSrc: 'reorder'
                // },

                // rowReorder: {
                //     selector: 'tr td:not(:nth-child(1),:last-of-type)',
                //     dataSrc: 'ordering'
                // },
            });


            // datatable.on('row-reorder', function(e, details) {
            //     if (details.length) {
            //         let rows = [];
            //         details.forEach(element => {
            //             rows.push({
            //                 id: datatable.row(element.node).data().id,
            //                 ordering: element.newData
            //             });
            //         });

            //         $.ajax({
            //             headers: {
            //                 'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            //             },
            //             method: 'POST',
            //             url: "{{ route('portfolio.reorder') }}",
            //             data: {
            //                 rows
            //             }
            //         }).done(function() {
            //             datatable.ajax.reload()
            //         });
            //     }
            // });




            // datatable.on('row-reorder', function(e, diff, edit) {

            //     var result = 'Reorder started on row: ' + edit.triggerRow.data()[1] + '<br>';

            //     for (var i = 0, ien = diff.length; i < ien; i++) {
            //         var rowData = datatable.row(diff[i].node).data();
            //         $(diff[i].node).addClass("reordered");

            //     }
            //     // console.log('diff', diff);
            //     let rows = [];

            //     diff.forEach(element => {
            //         rows.push({
            //             id: datatable.row(element.node).data().id,
            //             ordering: element.newPosition
            //         });

            //         console.log(datatable.row(element.node).data().id, element.newPosition);
            //     });



            //     $.ajax({
            //         headers: {
            //             'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         method: 'POST',
            //         url: "{{ route('portfolio.reorder') }}",
            //         data: {
            //             rows
            //         }
            //     }).done(function(res) {
            //         // console.log("success: ");
            //         $('#example3').DataTable().ajax.reload();
            //     });
            //     $('#result').html('Event result:<br>' + result);
            // });
        });
    </script>

    @endsection