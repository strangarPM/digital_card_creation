@extends('admin.layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')

    <div class="page-body">

        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.home')}}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

       <div class="row">
           <div class="col-sm-6 col-xl-3 col-lg-6">
               <div class="card o-hidden">
                   <div class="bg-primary b-r-4 card-body">
                       <div class="media static-top-widget">
                           <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
                           <div class="media-body"><span class="m-0">Total Rooms</span>
                               <h4 class="mb-0 counter" id="total_rooms">N/A</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users icon-bg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-sm-6 col-xl-3 col-lg-6">
               <div class="card o-hidden">
                   <div class="bg-secondary b-r-4 card-body">
                       <div class="media static-top-widget">
                           <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg></div>
                           <div class="media-body"><span class="m-0">Total Booking</span>
                               <h4 class="mb-0 counter" id="total_booking">N/A</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid icon-bg"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>

@endsection

@section('extra-script')

    <script type="text/javascript">

        $.ajax({
            type: "POST",
            url: '{{url('api/getAllReportByAdmin')}}',
            beforeSend: function (xhr) {
                xhr.setRequestHeader("Authorization", token);
            },
            success: function (data) {
                let code = data.code;
                let message = data.message;
                if (code == 200) {

                    let report = data.data;
                    $("#total_rooms").text(report.total_rooms);
                    $("#total_booking").text(report.total_booking);

                } else {
                    swal({text: message, icon: "error", timer: 2000});
                    //showAlertMessage(0, err);
                }
            },
            error: function (err) {
                swal({text: err, icon: "error", timer: 2000});
                //showAlertMessage(0,err);
            },
        });

    </script>
@endsection
