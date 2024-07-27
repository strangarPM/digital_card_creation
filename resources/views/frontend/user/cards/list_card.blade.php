@extends('frontend.user.layouts.master')

@section('dropzone-css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('title')
    Card List
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
                        <h3>Card List</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('user.dashboard')}}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Card List</li>
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
                                                <th>UUID</th>
                                                <th>logo</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                                <th>Detail</th>
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

        getCardlist();
        let modelData = [];
        function getCardlist() {

            $.ajax({
                url: '{{route('api.user.card_list')}}',
                type: "get",
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("Authorization", token);
                },
                success: function (data) {

                    let code = data.code;
                    let message = data.message;
                    if (code == 200) {
                        modelData = data.data.cards;
                        
                        console.log(`${modelData}`);


                        $("#ajax-data-object").dataTable().fnDestroy();
                        let table = $('#ajax-data-object').DataTable({
                            "order": [[0, 'desc']],
                            data: modelData,
                            columns: [
                                {"data" : "uuid","width":"30%"},
                                {
                                    "render" : function (data, type, row){
                                        return `<img src='${row.logo_img}' height='50px'>`;
                                    }
                                },
                                {"data" : "title","width":"30%"},
                                {
                                    "render": function (data, type, row) {
                                        return `<button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="" data-bs-original-title="" onclick="deleteCard('${row.uuid}')">Delete</button>`;
                                    }
                                },
                                {
                                    "render": function (data, type, row) {
                                        console.log(row.id);
                                        let url = `{{url('/card')}}/${row.uuid}`;
                                        return `<a href='${url}' target ="_blank"><button class="btn btn-info btn-xs" > Detail </button></a> `;
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

        function deleteCard(id){

            let formData = new FormData();
            formData.append('card_id', id);
            
            $.ajax({
                url: '{{route('api.user.delete_card')}}',
                type: "POST",
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("Authorization", token);
                },
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {

                    let code = data.code;
                    let message = data.message;
                    if (code == 200) {
                        swal({text: message, icon: "success", timer: 2000});
                        window.location = '{{route('user.list-card')}}';

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
