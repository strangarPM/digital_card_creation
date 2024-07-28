@extends('admin.layouts.master')

@section('dropzone-css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('title')
    User List
@endsection


@section('extra-css')

    <style>
        .btn.loading {
            position: relative;
            pointer-events: none;
            opacity: 0.7;
        }

        .btn.loading .loader {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
            font-size: 24px;
        }

        .loader {
            display: none;
        }
    </style>

@endsection

@section('content')

    <div class="page-body">

        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>User List</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.home')}}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">User List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="ajax-data-object_wrapper" class="dataTables_wrapper">

                                        <table class="display datatables dataTable" id="ajax-data-object" role="grid"
                                               aria-describedby="ajax-data-object_info" style="width: 1173px;">
                                            <thead>
                                            <tr role="row">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Payment Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('dropzone-js')
    <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
@endsection

@section('extra-script')

    <script type="text/javascript">

        function showSpinner(element) {
            $(element).addClass('loading').find('.loader').show();
        }

        function hideSpinner(element) {
            console.log(element);
            $(element).removeClass('loading').find('.loader').hide();
        }

        $(document).ready(function() {
            $('#sendAppData').click(function() {
                addTemplate(this);
            });

            $('#deleteCatalogData').click(function() {
                deleteTemplate(this);
            });
        });

        function updatePaymentStatus(event) {
            var checkbox = $(event);
            checkbox.attr('value', event.checked ? 1 : 0);
            var dataId = checkbox.data('id');
            const isChecked = event.checked ? 1 : 0;
            console.log(isChecked);
            const apiUrl = '{{url('/api/admin/updatePaymentStatus')}}';
            const data = { status: isChecked, id: dataId };

            $.ajax({
                url: apiUrl,
                type: 'POST',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("Authorization", token);
                },
                contentType: 'application/json',
                data: JSON.stringify(data),
                success: function(response) {
                    console.log('Success:', response);
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });

        }

        getUserList();
        let modelData = [];
        function getUserList() {

            $.ajax({
                url: '{{url('api/admin/getUserList')}}',
                type: "get",
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("Authorization", token);
                },
                success: function (data) {

                    let code = data.code;
                    let message = data.message;
                    if (code == 200) {
                        modelData = data.data.users;
                        
                        console.log(`${modelData}`);


                        $("#ajax-data-object").dataTable().fnDestroy();
                        let table = $('#ajax-data-object').DataTable({
                            "order": [[0, 'desc']],
                            data: modelData,
                            columns: [
                                {"data" : "id","width":"10%"},
                                {"data" : "name","width":"30%"},
                                {"data" : "email","width":"30%"},
                                {"data" : "mobile","width":"30%"},
                                // {"data" : "payment_status","width":"30%"},
                                {
                                    "render": function (data, type, row) {
                                        let isChecked = row.payment_status ? "checked" : "";
                                        return `<div class="media-body text-end icon-state">
                                                    <label class="switch">
                                                    <input type="checkbox" data-id=${row.id} value=${row.payment_status} ${isChecked} onchange="updatePaymentStatus(this)" id="apiCheckbox" data-bs-original-title="" title=""><span class="switch-state"></span>
                                                    </label>
                                                </div> `;


                                    }
                                },

                            ],
                        });

                    } else {
                        swal({text: message, icon: "error", timer: 2000});
                        //showAlertMessage(0, err);
                    }
                },
                error: function (err) {
                    swal({text: err, icon: "error", timer: 2000});
                    //showAlertMessage(0, err);
                }
            });
        }

    </script>
@endsection
