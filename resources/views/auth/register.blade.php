<!doctype html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Zh7I0I7mJ0GqsUDl2Jhnmtf9LOgpm7DWrgXCZDiU">


    <title>Sign Up</title>

    <!-- CSS files -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('asset/frontend/css/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome.min.css')}}" />
    <script type="text/javascript" src="{{asset('asset/js/alpine.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/frontend/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/sweetalert.min.js')}}"></script>
</head>

<body class="antialiased bg-body text-body font-body" dir="ltr">
    <div>

        <section>

            <div class="flex flex-wrap">

                <div class="mt-10 pt-6 lg:pt-16 pb-6 w-full lg:w-1/2">

                    <div class="max-w-md mx-auto">

                        <div class="mb-6 lg:mb-20 w-full px-3 flex items-center justify-between"><a
                                class="text-3xl font-bold leading-none" href="{{route('index')}}">digitalCard</a><a
                                class="py-2 px-6 text-lg rounded-l-xl rounded-t-xl bg-green-600 hover:bg-green-700 text-white font-bold transition duration-200"
                                href="{{route('login')}}">Sign In</a></div>

                        <div>

                            <div class="mb-6 px-3">

                                <span class="text-gray-500">Sign Up</span>

                                <h3 class="text-2xl font-bold">Create an account</h3>

                            </div>

                            <form method="POST" id="ajaxForm">

                                <div class="mb-3 flex p-4 mx-2 bg-gray-200 rounded">

                                    <input class="w-full text-lg bg-gray-200 outline-none " id="name" type="text"
                                        placeholder="Full Name" name="name" value="" required autocomplete="name"
                                        autofocus>

                                    <svg class="h-6 w-6 ml-4 my-auto text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />

                                    </svg>

                                </div>




                                <div class="mb-3 flex p-4 mx-2 bg-gray-200 rounded">

                                    <input class="w-full text-lg bg-gray-200 outline-none " id="email" type="email"
                                        placeholder="Enter your email" name="email" value="" required
                                        autocomplete="email">



                                    <svg class="h-6 w-6 ml-4 my-auto text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">

                                        </path>

                                    </svg>

                                </div>


                                <div class="mb-3 flex p-4 mx-2 bg-gray-200 rounded">

                                    <input class="w-full text-lg bg-gray-200 outline-none" type="text"
                                        placeholder="Enter your mobile num (10 digit)" name="mobile_num" id="mobile"
                                        pattern="[1-9]{1}[0-9]{9}" maxlength="10" minlength="10" value="" required>



                                    <svg class="h-6 w-6 ml-4 my-auto text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">

                                        </path>

                                    </svg>

                                </div>



                                <div class="flex flex-wrap">

                                    <div class="mb-3 flex lg:w-full p-4 mx-2 bg-gray-200 rounded">

                                        <input class="w-full text-lg bg-gray-200 outline-none " id="password"
                                            type="password" placeholder="Enter your password" name="password" required
                                            autocomplete="new-password">



                                        <svg class="h-6 w-6 ml-4 my-auto text-gray-300"
                                            xmlns="http://www.w3.org/2000/svg" onmouseover="mouseoverPass();"
                                            onmouseout="mouseoutPass();" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">

                                            </path>

                                        </svg>

                                    </div>




                                    <div class="mb-3 flex lg:w-full p-4 mx-2 bg-gray-200 rounded">

                                        <input class="w-full text-lg bg-gray-200 outline-none" id="password-confirm"
                                            type="password" placeholder="Enter your confirm password"
                                            name="password_confirmation" required autocomplete="new-password">



                                        <svg class="h-6 w-6 ml-4 my-auto text-gray-300"
                                            xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">

                                            </path>

                                        </svg>

                                    </div>

                                </div>



                                <div class="px-3 text-center">

                                    <button type="submit"
                                        class="mb-2 w-full py-4 bg-green-600 hover:bg-green-700 rounded text-lg font-bold text-gray-50 transition duration-200">Sign
                                        Up</button>

                                    <span class="text-gray-400 text-lg">

                                        <span>Already have an account?</span>

                                        <a class="text-green-600 hover:underline" href="{{route('login')}}">Sign In</a>

                                    </span>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="hidden lg:block relative w-full lg:w-1/2 bg-green-600">

                    <div class="absolute bottom-0 inset-x-0 mx-auto mb-12 max-w-xl text-center authentication">

                        <img class="lg:max-w-xl mx-auto" src="{{asset('asset/frontend/assets/elements/home.svg')}}"
                            alt="FreeDigitalBusinessCardsmaker">



                    </div>

                </div>



            </div>

        </section>



        <div class="fixed bottom-0 inset-x-0 z-50 js-cookie-consent cookie-consent">
            <div class="max-w-md mx-4 md:mx-0 md:ml-10 mb-6 pt-8 bg-gray-800 text-white rounded-lg">
                <div class="px-8 text-center">
                    <p class="font-bold font-heading">Cookie Policy</p>
                    <p class="mb-5 mt-3 mb-6 text-gray-400 text-sm">Your experience on this site will be improved by
                        allowing cookies.</p>
                </div>
                <div class="flex border-t border-gray-700 text-center"><a onclick="closeCookie()"
                        class="inline-block w-1/2 py-4 text-sm rounded-bl-lg border-r border-gray-700 font-bold hover:bg-gray-700 transition duration-200"
                        href="#">Decline Cookies</a><a
                        class="inline-block w-1/2 py-4 text-sm rounded-br-lg text-white font-bold hover:bg-gray-700 transition duration-200 js-cookie-consent-agree cookie-consent__agree"
                        href="#">Allow cookies</a></div>
            </div>
        </div>
        <script>

            window.laravelCookieConsent = (function () {

                const COOKIE_VALUE = 1;
                const COOKIE_DOMAIN = 'digital.com';

                function consentWithCookies() {
                    setCookie('laravel_cookie_consent', COOKIE_VALUE, 7300);
                    hideCookieDialog();
                }

                function cookieExists(name) {
                    return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
                }

                function hideCookieDialog() {
                    const dialogs = document.getElementsByClassName('js-cookie-consent');

                    for (let i = 0; i < dialogs.length; ++i) {
                        dialogs[i].style.display = 'none';
                    }
                }

                function setCookie(name, value, expirationInDays) {
                    const date = new Date();
                    date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                    document.cookie = name + '=' + value
                        + ';expires=' + date.toUTCString()
                        + ';domain=' + COOKIE_DOMAIN
                        + ';path=/'
                        + ';samesite=lax';
                }

                if (cookieExists('laravel_cookie_consent')) {
                    hideCookieDialog();
                }

                const buttons = document.getElementsByClassName('js-cookie-consent-agree');

                for (let i = 0; i < buttons.length; ++i) {
                    buttons[i].addEventListener('click', consentWithCookies);
                }

                return {
                    consentWithCookies: consentWithCookies,
                    hideCookieDialog: hideCookieDialog
                };
            })();
        </script>

    </div>


    <!-- Smooth Scroll -->
    <script type="text/javascript" src="{{asset('asset/js/smooth-scroll.polyfills.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/frontend/js/footer.js')}}"></script>


    <script>

        function mouseoverPass(obj) {

            "use strict";

            var obj = document.getElementById('password');

            obj.type = "text";

        }

        function mouseoutPass(obj) {

            "use strict";

            var obj = document.getElementById('password');

            obj.type = "password";

        }

    </script>

    <script>

        $(document).ready( function() {
            $('#ajaxForm').on('submit', function (e) {
                e.preventDefault(); // Prevent the default form submission

                 // Get CSRF token from meta tag
                 let token = $('meta[name="csrf-token"]').attr('content');

                let request_body = {
                   name : $('#name').val(),
                   email : $('#email').val(),
                   mobile : $('#mobile').val(),
                   password : $('#password').val(),
                   _token : token
                };

                console.log(request_body);


                $.ajax({
                    url: "{{ route('doRegister') }}",
                    type: 'POST',
                    data : request_body,
                    success : function (response) {

                        if(response.code == 200) {

                            swal({
                                title : response.message,
                                type: 'success',
                                icon: 'success'
                            });

                        } else {
                            swal({
                                title : response.message,
                                type: 'error',
                                icon: 'error'
                            });
                        }

                    },
                    error : function (response) {
                        swal({
                            title : response.message,
                            type: 'error',
                            icon: 'error'
                        });
                        console.error(response)
                    }
                });

            });
        });

    </script>

</body>

</html>