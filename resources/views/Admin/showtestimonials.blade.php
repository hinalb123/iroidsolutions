@extends('layout.admin.admin')

@section('title')



<div class="col-sm-5">
    <h1 class="m-0" style="color: #337AB7 ;">Video Testimonials</h1>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item">
            <form action="{{route('admin.home')}}" method="GET">
                <div>
                    <input type="submit" value="Add Video Testimonials" style="background: #337AB7 !important;
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

            <div class="card-body">
                <table id="example3" class="table table-bordered table-striped" >
                    @routes
                    <thead>
                        <tr style="font-family: Work Sans, sans-serif;">
                            <th>Id</th>
                            <th>ClientName</th>
                            <th>Position</th>
                            <th>Country</th>
                            <th>Thumbnail</th>
                            <th>Video</th>
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
    <!-- <script src="{{ asset('js/demo.js')}}"></script> -->

    <script>
        function deletedata(id)

        {

            swal({
                title: "Delete?",
                text: "Are you sure? want to delete this Testimonial?",
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
                        url: route('admin.deletetestimonial', id),
                        data: {
                            _token: CSRF_TOKEN
                        },
                        dataType: 'JSON',
                        success: function(results) {

                            // $("#tid" + id).remove();
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
            $("")
            var datatable = $("#example3").DataTable({
                responsive: true,
               
                "autoWidth": false,
                fixedColumns: false,
                processing: true,
                serverSide: true,
                retrieve: true,
                "paging": true,
                  // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                ajax: {
                    type: "GET",
                    url: route('admin.showtestimonials'),

                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'id',
                        className: 'reorder',
                        searchable: false,
                    },
                    {
                        data: 'clientname',
                        defaultContent: '',
                        name: 'clientname',
                        render: function(data, type, row) {
                            return row.clientname
                        }

                    },
                    {
                        data: 'position',
                        defaultContent: '',
                        name: 'position',
                        render: function(data, type, row) {
                            return row.position
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
                        data: 'thumbnail ',
                        defaultContent: '',
                        name: 'thumbnail ',
                        render: function(data, type, row) {
                            if (row.thumbnail != '') {
                                return `<img src="{{url('storage')}}/${row.thumbnail}" class="" style="width:100px;height:100px;">`;
                            } else {
                                return '-';
                            }
                        }
                    },
                    {
                        data: 'videolink ',
                        defaultContent: '',
                        name: 'videolink ',
                        render: function(data, type, row) {
                            return row.videolink
                        }
                    },
                    {
                        data: 'ordering ',
                        defaultContent: '',
                        name: 'ordering ',
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
            //     // selector: 'tr td:not(:first-of-type,:last-of-type)',
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
            //         url: "{{ route('testimonial.reorder') }}",
            //         data: {
            //             rows
            //         }
            //     }).done(function(res) {
            //         console.log("success: ");
            //         $('#example3').DataTable().ajax.reload();
            //     });
            //     $('#result').html('Event result:<br>' + result);
            // });
        });
    </script>
    @endsection