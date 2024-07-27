<!DOCTYPE html>
<html lang="en">
@include('frontend.user.layouts.head')
<body>
<script>
    if(is_dark_mode_enable == 1){
        document.body.classList.add("dark-only");
    }else{
        document.body.classList.remove("dark-only");
    }
</script>
<div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
        </filter>
    </svg>
</div>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
@include('frontend.user.layouts.header')
<!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
    @include('frontend.user.layouts.sidebar')
    <!-- Page Sidebar Ends-->
    @yield('content')
    <!-- footer start-->
        @include('frontend.user.layouts.footer')
    </div>
</div>
@include('frontend.user.layouts.script')
<!-- login js-->
<!-- Plugin used-->
</body>
</html>
