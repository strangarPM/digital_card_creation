<!DOCTYPE HTML>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="viewport"
		content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />

	<title>{{$details['title']}}</title>

	<link rel="icon" href="{{$details['logo_img']}}"
		sizes="96x96" type="image/png" />

	<link rel="stylesheet" href="{{asset('asset/frontend/app/styles/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('asset/frontend/app/styles/style9a04.css?i=1')}}">

	<link
		href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&amp;display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="{{asset('asset/frontend/app/fonts/css/fontawesome-all.min.css')}}">

	<style>
		.list-custom-large a strong {
			margin-top: 43px;
			line-height: 18px !important;
		}

		.list-custom-large i {
			//line-height: 90px;
		}

		.list-custom-large a {
			border-bottom: none;
		}

		#footer-bar a span {

			font-size: 15px;
			margin-top: 0px;
		}

		#footer-bar a i {
			font-size: 20px;
		}

		#footer-bar a {
			padding-top: 8px;
		}

		.theme-dark .color-black {
			color: white !important;
		}

		body,
		#footer-bar {
			max-width: 36rem;
			margin-left: auto;
			margin-right: auto;
		}

		.theme-dark .color-dark-light {
			color: #cac9c9 !important;
		}
	</style>
</head>

<body class="theme-light" data-highlight="highlight-green" data-gradient="body-default">

	<div id="preloader">
		<div class="spinner-border color-highlight" role="status"></div>
	</div>

	<div id="page">

		{{-- <div id="footer-bar" class="footer-bar-2 footer-bar-white bg-highlight font-22">
			<a href="#" class="profile"><i class="fa-regular fa-address-card"></i><span>Profile</span></a>
			<a href="#" data-menu="menu-send"><i class="fa-brands fa-whatsapp"></i><span>Share / Send</span></a>
			<a href="#" data-menu="scan_qr"><i class="fa-solid fa-qrcode"></i><span>Scan QR</span></a>
			<a href="download/prefab-wooden-homes.vcf"><i class="fa-solid fa-download"></i><span>Save Contact</span></a>
		</div>
        
        <div id="scan_qr" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-effect="menu-over"
			data-menu-height="340" style="text-align: center;">

			<div class="mt-4 mb-3 qr-code" id="qrcode"></div>

			<a href="javascript:void(0);" onclick="downloadQr()" class="font-28" style="margin-left: 23px;
 text-decoration: underline !important;">
				Download QR
			</a>

		</div>

		<div id="menu-send" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="230">
			<div class="menu-title mt-n1">
				<h1>Phone Num</h1>
				<p>
					For ex: 91987654310 (With Country code) (Without +)
				</p>
				<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
			</div>
			<div class="content mb-0 mt-2">
				<div class="divider mb-3"></div>

				<div class="input-style no-borders no-icon validate-field">
					<input type="tel" id="phone_number" class="form-control" placeholder="For ex: 91987654310"
						required="">
					<label class="color-highlight">Mobile Num</label>
					<em>(required)</em>
				</div>
				<a href="#" onclick="sendVcard()"
					class="btn btn-l mt-4 rounded-sm btn-full bg-blue-dark text-uppercase font-800">Send</a>
			</div>
		</div> --}}
		<div class="page-content">
			<img src="{{$details['cover_img']}}" style="width:100%">

			<img src="{{$details['logo_img']}}" width="115"
				height="115" class="rounded-circle mt-3 shadow-xl preload-img" style="margin-top: -65px !important;
           justify-content: center;
           display: flex;
           margin: 0 auto;
           justify-content: center;">

			<div class="text-center">
				<!--  scale-icon -->
				<h1 class="font-700 font-30 mt-2">
					{{$details['title']}}
				</h1>

				<p class="mt-0 font-15 color-highlight ">
					{{$details['short_title']}}
				</p>
				<p class="mt-n3 font-16 px-2 color-black">

					{{$details['description']}}

				</p>

				<div class="text-center mt-n2 mb-4">
					<a target="_blank"
						href="#"
						class="icon icon-xs rounded-sm shadow-l me-3 bg-facebook"><i class="fab fa-facebook-f"></i></a>
					<a target="_blank"
						href="#"
						class="icon icon-xs rounded-sm shadow-l me-3 bg-whatsapp scale-icon"><i
							class="fab fa-whatsapp"></i></a>
					<a target="_blank"
						href="#"
						class="icon icon-xs rounded-sm shadow-l me-3 bg-twitter"><i class="fab fa-twitter"></i></a>
				</div>

			</div>

            @if (count($details['card_features']) > 0)
                
                <div class="card card-style mb-3">
                    <div class="list-group list-custom-small list-icon-0 bg-highlight ps-3 pe-4">
                        <a data-bs-toggle="collapse" class="no-effect" href="#collapse-5">
                            <i class="font-18 fa-regular fa-address-card color-white"></i>
                            <span class="font-18 color-white">Contact Info</span>
                        </a>
                    </div>
                    <div class="ps-2 pe-4" id="collapse-5">
                        <div class="list-group list-custom-large short-border">

                            @foreach ($details['card_features'] as $item)

                                <a class="break-word" style="height: 95px;">

                                    <i class="font-15 fas fa-map-marker bg-highlight"></i>
                                    <span class="font-17">{{$item['title']}}</span>
                                    <strong class="font-14 color-dark-light" style="line-height: 23px !important;">
                                       {{$item['value']}}
                                    </strong>
                                </a>

                            @endforeach

							<span class="mt-2 mb-3"></span>


                        </div>
                    </div>
                </div>
            @endif

            @if (count($details['services']) > 0)
                
			<div class="card card-style mb-3">
				<div class="list-group list-custom-small list-icon-0 bg-highlight ps-3 pe-4 mb-3">
					<a data-bs-toggle="collapse" class="no-effect" href="#collapse-5">
						<i class="font-18 fa-solid fa-cart-shopping color-white"></i>

						<span class="font-18 color-white">Product & Services</span>
					</a>
				</div>

				<div class="row mb-0">

					@foreach ($details['services'] as $item)


						<a href="{{config('constants.SERVICE_IMG_PATH').'/'.$item['img']}}">
							<img src="{{config('constants.SERVICE_IMG_PATH').'/'.$item['img']}}" class="img-fluid rounded-xs mb-3"
								alt="Wooden Building Designing">
							<span class="font-17 font-600 color-black px-2">
								{{$item['title']}}
							</span>
							<p class="px-2 mt-1">
								{{$item['dec']}}
							</p>


							{{-- <a href="https://wa.me/919540489349?text=Hi,%20I%20am%20interested%20in%20your%20product/service:%20Wooden%20Building%20Designing.%20Please%20provide%20more%20details."
								target="_blank"
								class="btn btn-m btn-full mb-3 rounded-sm text-uppercase font-900 border-green-dark color-green-dark bg-green-dark shadow-bg shadow-bg-m mb-4 mt-n3 mx-3"
								style="    width: 91%;">

								<i class="fa-brands fa-whatsapp px-2 font-16 scale-icon"></i> Make WhatsApp Enquiry

							</a> --}}


						</a>
						
					@endforeach
				</div>
			</div>
            @endif

			@if (count($details['yt']) > 0)

			<div class="card card-style">

				<div class="list-group list-custom-small list-icon-0 bg-highlight ps-3 pe-4">
					<a data-bs-toggle="collapse" class="no-effect" href="#collapse-5">
						<i class="font-18 fa-brands fa-youtube color-white"></i>

						<span class="font-18 color-white">YouTube Videos</span>
					</a>
				</div>

				<div class="ps-2 pe-2 mt-3">

					@foreach ($details['yt'] as $yt)
					<div class="embed-video mb-4">
						{!!$yt['embed_code']!!}

						<p class="font-18 color-black text-center mt-0">{{$yt['title']}}</p>
					</div>

						
					@endforeach

					

				</div>
			</div>
				
			@endif

			<p class="footer-copyright font-13 mt-n3">
				Copyright ©
				<a href="pwh-rajeev.html" class="color-highlight">
					{{$details['title']}}
				</a> .
				All Rights Reserved.
			</p>
		</div>
	</div>

	<script data-cfasync="false" src="{{asset('asset/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
	<script src="{{asset('asset/frontend/app/scripts/bootstrap.min.js')}}"></script>

	<script src="{{asset('asset/frontend/app/scripts/customf086.js?i=1721639375')}}"></script>

	<script src="{{asset('asset/frontend/app/scripts/jquery-1.11.0.min.js')}}"></script>

	<script src="{{asset('asset/frontend/app/scripts/jquery-qrcode.min9a04.js?i=1')}}"></script>

	<script type="text/javascript">

		$(".profile").click(function () {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});

		$(".open").click(function () {
			$(this).hide();
			$(".closed").show();
		});

		function sendVcard() {
			"use strict";
			var phone_number = $('#phone_number').val();
			console.log(phone_number);
			if (phone_number) {
				window.open('https://api.whatsapp.com/send/?phone=' + phone_number + '&text=' + `Welcome+to+Prefab+Wooden+Homes`, '_blank');
				return false;
			}

		}

		if ($(".qr-code").length) {

			var normalParams = {
				mode: 0,
				ecLevel: 'H',
				text: window.location.href,
				render: 'image',
				fill: "#000000",
				background: "#ffffff",
			};

			$(".qr-code").qrcode(normalParams);

			function downloadQr() {

				var imgData = $(".qr-code").children().attr("src");
				var a = document.createElement("a");
				a.href = imgData;
				a.download = "pwh-rajeev-2.html";
				a.click();
			}

		}

	</script>
</body>

</html>