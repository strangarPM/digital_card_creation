@extends('frontend.user.layouts.master')

@section('dropzone-css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.css')}}">
    <style>
        .img-thumbs {
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            margin: 1.5rem 0;
            padding: 0.75rem;
        }
        .img-thumbs-hidden {
            display: none;
        }

        .wrapper-thumb {
            position: relative;
            display:inline-block;
            margin: 1rem 0;
            justify-content: space-around;
        }

        .img-preview-thumb {
            background: #fff;
            border: 1px solid none;
            border-radius: 0.25rem;
            box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
            margin-right: 1rem;
            max-width: 140px;
            padding: 0.25rem;
        }

        .remove-btn{
            position:absolute;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:.7rem;
            top:-5px;
            right:10px;
            width:20px;
            height:20px;
            background:white;
            border-radius:10px;
            font-weight:bold;
            cursor:pointer;
        }

        .remove-btn:hover{
            box-shadow: 0px 0px 3px grey;
            transition:all .3s ease-in-out;
        }
    </style>
@endsection

@section('title')
    Add Card
@endsection

@section('content')

    <div class="page-body">        
        <div class="row">
            <div class="col-sm-12">
                <form id="add-room-form" action="#">
                    <div class="card">
                        <div class="card-body">
                            <div class="form theme-form">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Title</label>
                                            <input class="form-control" type="text" placeholder="Title" name="title" value="hello title">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Short Title</label>
                                            <input class="form-control" type="text" placeholder="Short Title" name="short_title" value="hello title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea class="form-control" id="description" rows="3" name="description">hello Description</textarea>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card">
                                        <div class="card-header" style="display: flex;justify-content:space-between">
                                            <label for="">Card Features</label>
                                            <a class="btn btn-success" href="#" id="add_card_features">Add Card Features</a>
                                        </div>
                                        <div class="card-body">

                                            <table id="card_features" style="width:100%">
                                                <tr>
                                                    <td>
                                                        <label>title</label>
                                                        <input class="form-control" type="text" name="card_features[0][title]">
                                                    </td>
                                                    <td>
                                                        <label>Value</label>
                                                        <input class="form-control" type="text" name="card_features[0][value]">
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="card">
                                        <div class="card-header" style="display: flex;justify-content:space-between">
                                            <label for="">Service</label>
                                            <a class="btn btn-success" href="#" id="add_service">Add Service</a>
                                        </div>
                                        <div class="card-body">

                                            <table id="services" style="width:100%">
                                                <tr>
                                                    <td>
                                                        <label>Img</label>
                                                        <input class="form-control" type="file" name="services[0][img]">
                                                    </td>
                                                    <td>
                                                        <label>title</label>
                                                        <input class="form-control" type="text" name="services[0][title]">
                                                    </td>
                                                    <td>
                                                        <label>Description</label>
                                                        <input class="form-control" type="text" name="services[0][dec]">
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="card">
                                        <div class="card-header" style="display: flex;justify-content:space-between">
                                            <label for="">Youtube</label>
                                            <a class="btn btn-success" href="#" id="add_yt">Add Youtube Link</a>
                                        </div>
                                        <div class="card-body">

                                            <table id="yt_table" style="width:100%">
                                                <tr>
                                                    <td>
                                                        <label>title</label>
                                                        <input class="form-control" type="text" name="yt_table[0][title]">
                                                    </td>
                                                    <td>
                                                        <label>Value</label>
                                                        <input class="form-control" type="text" name="yt_table[0][embed_code]">
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-5">
                                    <label for="">Cover Image</label>
                                    <input type="file" class="form-control" name="cover_img" id="signle-upload-img" />
                                </div>
                                <div class="img-thumbs img-thumbs-hidden" id="signle-img-preview"></div>

                                <div class="form-group mt-5">
                                    <label for="">Logo</label>
                                    <input type="file" class="form-control" name="logo_img" id="logo-upload-img" />
                                </div>
                                <div class="img-thumbs img-thumbs-hidden" id="logo-img-preview"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info" id="submitbtn"><span class="loader"><i class="fa fa-spinner fa-spin"></i></span>Save</button>
                        </div>
                    </div>
                </form>
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

        let row_num = 0;

        $(document).ready(function () {


            $('#add_card_features').on('click', function(){
                duplicateRow();
            });

            $('#add_service').on('click', function(){
                duplicateService();
            });

            $('#add_yt').on('click', function(){
                duplicateYt();
            });

            $('#add-room-form').on('submit', function(e) {
                addRoom(e);
            });


            // Multi Image Setup

            var imgUpload = document.getElementById('upload-img')
            , coverImg = document.getElementById('signle-upload-img')
            , coverPreview = document.getElementById('signle-img-preview')
            , logoImg = document.getElementById('logo-upload-img')
            , logoPreview = document.getElementById('logo-img-preview')
            , imgPreview = document.getElementById('img-preview')
            , imgUploadForm = document.getElementById('form-upload')
            , totalFiles
            , previewTitle
            , previewTitleText
            , img;

            coverImg.addEventListener('change', (event) => singlePreviewImgs(event,coverPreview), true);
            logoImg.addEventListener('change', (event) => singlePreviewImgs(event,logoPreview), true);
            // imgUpload.addEventListener('change', previewImgs, true);

            function previewImgs(event) {
                totalFiles = imgUpload.files.length;
                
                    if(!!totalFiles) {
                    imgPreview.classList.remove('img-thumbs-hidden');
                }
                
                for(var i = 0; i < totalFiles; i++) {
                    wrapper = document.createElement('div');
                    wrapper.classList.add('wrapper-thumb');
                    removeBtn = document.createElement("span");
                    nodeRemove= document.createTextNode('x');
                    removeBtn.classList.add('remove-btn');
                    removeBtn.appendChild(nodeRemove);
                    img = document.createElement('img');
                    img.src = URL.createObjectURL(event.target.files[i]);
                    img.classList.add('img-preview-thumb');
                    wrapper.appendChild(img);
                    wrapper.appendChild(removeBtn);
                    imgPreview.appendChild(wrapper);
                
                    $('.remove-btn').click(function(){
                        $(this).parent('.wrapper-thumb').remove();
                    });    

                }
            }

            function singlePreviewImgs(event,previewHolder) {
                totalFiles = coverImg.files.length;
                    if(!!totalFiles) {
                        previewHolder.classList.remove('img-thumbs-hidden');
                }
                
                for(var i = 0; i < totalFiles; i++) {
                    wrapper = document.createElement('div');
                    wrapper.classList.add('wrapper-thumb');
                    removeBtn = document.createElement("span");
                    nodeRemove= document.createTextNode('x');
                    removeBtn.classList.add('remove-btn');
                    removeBtn.appendChild(nodeRemove);
                    img = document.createElement('img');
                    img.src = URL.createObjectURL(event.target.files[i]);
                    img.classList.add('img-preview-thumb');
                    wrapper.appendChild(img);
                    wrapper.appendChild(removeBtn);
                    previewHolder.appendChild(wrapper);
                
                    $('.remove-btn').click(function(){
                        $(this).parent('.wrapper-thumb').remove();
                    });    

                }
            }

        });

        function showSpinner(element) {
            $(element).addClass('loading').find('.loader').show();
        }

        function hideSpinner(element) {
            console.log(element);
            $(element).removeClass('loading').find('.loader').hide();
        }

        function duplicateRow() {
            
            row_num++;
            // Select the table
            var table = document.getElementById('card_features');
            let tr = document.createElement("tr");
            // Select the row to duplicate
            tr.dataset.id = row_num;
            tr.innerHTML = `<td>
                                <input class="form-control" type="text" name="card_features[${row_num}][title]">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="card_features[${row_num}][value]">
                            </td>
                            <td>
                                <div><a class="btn btn-danger remove_vendor" href="#" onclick="deleteRow(${row_num})">Cancel</a></div>
                            </td>`;            

            // Append the cloned row to the table
            table.tBodies[0].appendChild(tr);
        }

        function duplicateService() {
            
            row_num++;
            // Select the table
            var table = document.getElementById('services');
            let tr = document.createElement("tr");
            // Select the row to duplicate
            tr.dataset.id = 'service_'+row_num;
            tr.innerHTML = `<td>
                                <input class="form-control" type="file" name="services[${row_num}][img]">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="services[${row_num}][title]">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="services[${row_num}][dec]">
                            </td>
                            <td>
                                <div><a class="btn btn-danger remove_vendor" href="#" onclick="deleteRow('${tr.dataset.id}')">Cancel</a></div>
                            </td>`;

            // Append the cloned row to the table
            table.tBodies[0].appendChild(tr);
        }

        function duplicateYt() {
            
            row_num++;
            // Select the table
            var table = document.getElementById('yt_table');
            let tr = document.createElement("tr");
            // Select the row to duplicate
            tr.dataset.id = row_num;
            tr.innerHTML = `<td>
                                <input class="form-control" type="text" name="yt_table[${row_num}][title]">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="yt_table[${row_num}][embed_code]">
                            </td>
                            <td>
                                <div><a class="btn btn-danger remove_vendor" href="#" onclick="deleteRow(${row_num})">Cancel</a></div>
                            </td>`;            

            // Append the cloned row to the table
            table.tBodies[0].appendChild(tr);
        }

        function deleteRow(id){
            const row = document.querySelector(`tr[data-id='${id}']`);
            row.remove();
        }

        function addRoom(event) { 
            event.preventDefault();
            showSpinner('#submitbtn'); 

            var table = document.getElementById('card_features');
            var data = [];
            var form_data = new FormData(document.getElementById('add-room-form'));

            //Fetch Images



            //Call the API  
            $.ajax({
                type : "POST",
                url : "{{route('api.user.create_card')}}",
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("Authorization", token);
                },
                data : form_data,
                contentType: false,
                processData: false,
                success: function(response) {

                    let code = response.code;
                    let message = response.message;
                    if (code == 200) {
                        swal({text: message, icon: "success", timer: 20000});
                    } else {
                        swal({text: message, icon: "error", timer: 200000});
                    }
                    hideSpinner('#submitbtn');


                },
                errot: function(err) {
                    swal({text: err, icon: "error", timer: 200000});
                    hideSpinner('#submitbtn');
                }
            });

        }

        function uploadImage() {

        }




    </script>

@endsection
