<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description"
        content="A free Digital Business Cards maker. Contactless, smart, and virtual business cards enabled with a Link, QR &amp; NFC technology. Share professional details with one tap. No app is needed.">
    <meta name="keywords" content="digital vcard, free digital business card, business card for WhatsApp">
    <meta property="og:title" content="Free Digital Business Cards maker " />
    <meta property="og:description"
        content="A free Digital Business Cards maker. Contactless, smart, and virtual business cards enabled with a Link, QR &amp; NFC technology. Share professional details with one tap. No app is needed." />
    <meta property="og:url" content="index.html" />
    <meta name="twitter:title" content="Free Digital Business Cards maker" />
    <meta name="twitter:description"
        content="A free Digital Business Cards maker. Contactless, smart, and virtual business cards enabled with a Link, QR &amp; NFC technology. Share professional details with one tap. No app is needed." />
    <meta name="google-site-verification" content="">
    <link rel="icon" href="{{config('constants.LOGO_IMG')}}" sizes="96x96" type="image/png" />

    {{-- <script src="../www.google.com/recaptcha/api.js" async defer></script> --}}

    <!-- CSS files -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{{asset('asset/frontend/css/tailwind.min.css')}}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome.min.css')}}" />
    <script type="text/javascript" src="{{asset('asset/js/alpine.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/frontend/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/sweetalert.min.js')}}"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-5X5DKJZQV6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-5X5DKJZQV6');
    </script> --}}
</head>

<body class="antialiased bg-body text-body font-body" dir="ltr">
    
    <div>
        <nav class="sticky shadow-sm px-6 py-6 flex justify-between items-center bg-white custom-menu">
            <a class="text-dark text-3xl font-bold leading-none" href="{{route('index')}}"><img class="h-12"
                    src="{{config('constants.LOGO_IMG')}}"
                    alt="Free Digital Business Cards maker" width="auto"></a>
    
            <div class="lg:hidden">
    
                <button class="navbar-burger flex items-center text-dark p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
    
            </div>
            <ul
                class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-4">
                <style type="text/css">
                    li {
                        margin-right: 10px !important;
                    }
                </style>
    
                <li>
    
                    <a class="text-lg font-bold hover:text-dark text-dark"
                        href="#" target="_blank">
                        Smart Cards
                    </a>
    
                </li>
    
                <li>
    
    
                    <a class="text-lg font-bold hover:text-dark text-dark" href="#features">Features</a>
    
    
                </li>
    
                <li>
    
    
                    <a class="text-lg font-bold hover:text-dark text-dark" href="#pricing">Pricing</a>
    
    
                </li>
    
    
    
                <li>
    
                    <a class="text-lg font-bold hover:text-dark text-dark" href="{{route('about-us')}}">About</a>
    
                </li>
    
    
    
                <li>
    
                    <a class="text-lg font-bold hover:text-dark text-dark" href="{{route('contact')}}">Contact</a>
    
                </li>
    
    
    
            </ul>
    
            <div class="hidden lg:inline-block">
                <a class="hidden lg:inline-block py-2 px-6 bg-green-500 hover:bg-green-600 text-lg text-white font-bold rounded-l-xl rounded-t-xl transition duration-200"
                    href="{{route('login')}}">Sign In</a>
                <div @click.away="open = false"
                    class="hidden cursor-pointer lg:inline-block px-2 transition duration-200" x-data="{ open: false }">
                    <a @click="open = !open"
                        class="px-6 py-2 font-semibold text-dark text-center bg-gray-200 rounded-l-xl rounded-t-xl dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 hover:text-dark focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline">
    
                        <span>EN</span>
    
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
    
                    </a>
    
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="journal-scroll fixed w-full h-80 overflow-y-scroll mt-2 rounded-lg shadow-lg md:w-40">
    
                        <div class="px-2 py-2 bg-white capitalize rounded-sm shadow dark-mode:bg-gray-800"></div>
    
                    </div>
    
                </div>
    
            </div>
    
        </nav>
        
        <section>


            <div class="hidden navbar-menu relative z-50">

                <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>

                <nav
                    class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">

                    <div class="flex items-center mb-8">

                        <a class="mr-auto text-3xl font-bold leading-none" href="index.html"><img class="h-10"
                                src="{{asset('asset/frontend/assets/social/instagram.svg')}}"
                                alt="Free Digital Business Cards maker" width="auto"></a>

                        <button class="navbar-close">

                            <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12">

                                </path>

                            </svg>

                        </button>

                    </div>

                    <div>

                        <ul>

                            <li class="mb-1">

                                <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                                    href="nfc-business-cards.html">Smart Cards</a>

                            </li>

                            <li class="mb-1">


                                <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                                    href="{{route('index')}}#how-it-works">How it works?</a>


                            </li>

                            <li class="mb-1">


                                <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                                    href="{{route('index')}}#features">Features</a>


                            </li>

                            <li class="mb-1">


                                <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                                    href="{{route('index')}}#pricing">Pricing</a>


                            </li>

                            <li class="mb-1">

                                <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                                    href="{{route('contact')}}">Contact</a>

                            </li>











                            <div @click.away="open = false" @click="open = !open"
                                class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded transition duration-200"
                                x-data="{ open: false }">

                                <a
                                    class="text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 hover:text-white focus:text-gray-900 hover:bg-transparent focus:bg-gray-200 focus:outline-none focus:shadow-outline">

                                    <span>EN</span>



                                </a>

                            </div>




                        </ul>

                    </div>

                    <div class="mt-auto">

                        <div class="pt-6">


                            <a class="block px-4 py-3 mb-3 leading-loose text-white text-xs text-center font-semibold leading-none bg-red-600 hover:bg-red-700 rounded-l-xl rounded-t-xl"
                                href="login.html">Sign In</a>


                        </div>

                        <p class="my-4 text-xs text-center text-red-400">

                            <span><span id="year"></span> Free Digital Business Cards maker. All rights
                                reserved.</span>

                        </p>

                        <div class="text-center"><a class="inline-block px-1" href="#"
                                target="_blank"><img src=""{{asset('asset/frontend/assets/social/facebook.svg')}} alt=""></a><a
                                class="inline-block px-1" href="#" target="_blank"><img
                                    src="{{asset('asset/frontend/assets/social/twitter.svg')}}" alt=""></a><a class="inline-block px-1"
                                href="#" target="_blank"><img
                                    src="{{asset('asset/frontend/assets/social/instagram.svg')}}" alt=""></a></div>

                    </div>

                </nav>

            </div>

        </section>
        @yield('content')
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
                const COOKIE_DOMAIN = 'digitalCard.com';
    
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

    <footer class="bg-gray-800 pt-10 sm:mt-10 pt-10">

        <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-left">

            <!-- Col-1 -->

            <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">

                <!-- Col Title -->

                <div class="text-xs uppercase text-gray-400 font-medium mb-6">

                    Getting Started

                </div>



                <!-- Links -->


                <a href="#how-it-works"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    How it works?

                </a>





                <a href="#features"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Features

                </a>





                <a href="#pricing"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Pricing

                </a>




                <a href="faq.html"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    FAQs

                </a>



            </div>



            <!-- Col-2 -->

            <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">

                <!-- Col Title -->

                <div class="text-xs uppercase text-gray-400 font-medium mb-6">

                    My Account

                </div>



                <!-- Links -->

                <a href="login.html"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Login

                </a>

                <a href="register.html"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Register

                </a>

                <a href="#" target="_blank"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Shop

                </a>

            </div>



            <!-- Col-3 -->

            <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">

                <!-- Col Title -->

                <div class="text-xs uppercase text-gray-400 font-medium mb-6">

                    Helpful Links

                </div>



                <!-- Links -->

                <a href="refund-policy.html"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Refund Policy

                </a>

                <a href="cdn-cgi/l/email-protection.html#2a424f4646456a5e4b5a5c494b584e04494547"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Support

                </a>

                <a href="privacy-policy.html"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Privacy Policy

                </a>

                <a href="terms-and-conditions.html"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Terms and Conditions

                </a>

            </div>




            <!-- Col-3 -->

            <div class="p-5 w-1/2 sm:w-4/12 md:w-3/12">

                <!-- Col Title -->

                <div class="text-xs uppercase text-gray-400 font-medium mb-6">

                    Social Links

                </div>



                <!-- Links -->


                <a href="#" target="_blank"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Facebook

                </a>





                <a href="#" target="_blank"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Twitter

                </a>





                <a href="#" target="_blank"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Instagram

                </a>


                <a href="#" target="_blank"
                    class="my-3 block text-gray-300 hover:text-gray-100 text-lg font-medium duration-700">

                    Blog

                </a>


            </div>


        </div>



        <div class="pt-2 pb-2">

            <div class="flex pb-5 px-3 m-auto pt-5

            border-t border-gray-500 text-gray-400 text-lg

            flex-col md:flex-row max-w-6xl">

                <div class="mt-2">

                    <span id="year"></span> ABC.com. All rights reserved.

                </div>

            </div>

        </div>

    </footer>


    <!-- Smooth Scroll -->
    <script data-cfasync="false"
        src="{{asset('asset/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/js/smooth-scroll.polyfills.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('asset/frontend/js/footer.js')}}"></script>

</body>

</html>