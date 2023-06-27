@extends('layout.admin.admin')

@section('title')



<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Client Testimonials</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <form action="{{route('admin.clienttestimonial')}}" method="GET">
                <div>
                    <input type="submit" value="Add Client Testimonials" style="background: #337AB7 !important;
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
                <table id="example3" class="table table-bordered table-striped">
                    @routes
                    <thead>
                        <tr style="font-family: Work Sans, sans-serif;">
                            <th>Id</th>
                            <th>ClientName</th>
                            <th>Position</th>
                            <th>Description</th>
                            <th>Country</th>
                            <th>ProfilePic</th>
                            <th>Ordering</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
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
                        url: route('admin.deleteclienttestimonial', id),
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
     var decodeHTML = function (html) {
	var txt = document.createElement('textarea');
	txt.innerHTML = html;
	return txt.value;
};
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
                    url: route('admin.showclienttestimonial'),

                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id',
                        className: 'reorder',
                        searchable: false,
                    },
                    {
                        data: 'name',
                        defaultContent: '',
                        name: 'name',
                        render: function(data, type, row) {
                            return row.name
                        }
                    },
                    {
                        data: 'position ',
                        defaultContent: '',
                        name: 'position ',
                        render: function(data, type, row) {
                            return row.position
                        }
                    },
                    {
                        data: 'description',
                        defaultContent: '',
                        name: 'description',
                        render: function(data, type, row) {
                            var decoded = decodeHTML(row.description);
                            return decoded;
                        }

                    },
                   
                    {
                        data: 'country ',
                        defaultContent: '',
                        name: 'country ',
                        render: function(data, type, row) {
                            if (row.country_data) 
                            {
                                return row.country_data.name;
                            }
                            else{
                                return '-';
                            }
                           
                        }
                    },
                    {
                        data: 'profilepic ',
                        defaultContent: '',
                        name: 'profilepic ',
                        render: function(data, type, row) {
                            if (row.profilepic) {
                                return `<img src="{{url('storage')}}/${row.profilepic}" class="l-image" style="width:100px;height:100px;">`;
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
            //     rowReorder: {
                
            //     selector: 'tr td:not(:nth-child(1),:last-of-type)',
            //     dataSrc: 'reorder'
            // },
            });
            // datatable.on('row-reorder', function(e, diff, edit) {
            //     var result = 'Reorder started on row: ' + edit.triggerRow.data()[1] + '<br>';

            //     for (var i = 0, ien = diff.length; i < ien; i++) {
            //         var rowData = datatable.row(diff[i].node).data();
            //         $(diff[i].node).addClass("reordered");
            //         // result += rowData[1] + ' updated to be in position ' +
            //         //     diff[i].newData + ' (was ' + diff[i].oldData + ')<br>';
            //     }
            //     // console.log('diff', diff);
            //     let rows = [];

            //     diff.forEach(element => {
            //         rows.push({
            //             id: datatable.row(element.node).data().id,
            //             ordering: element.newPosition
            //         });
                  
            //     });



            //     $.ajax({
            //         headers: {
            //             'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         method: 'POST',
            //         url: "{{ route('clienttestimonial.reorder') }}",
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