@extends('frontend.index')

@section('title',('Digital Business Cards maker'))


@section('content')

   

    <section>


        <div class="bg-white pt-4 lg:pt-2 pb-2 md:pb-2">

            <div class="container mx-auto px-4">

                <div class="flex flex-wrap -mx-4">

                    <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-20 lg:mb-0 flex items-center">

                        <div class="w-full text-center lg:text-left">

                            <div class="max-w-md mx-auto lg:mx-0">

                                <h2 class="mb-3 text-4xl lg:text-5xl text-white font-bold">

                                    <span class="text-green-500">Free Digital Business Card</span>

                                </h2>

                            </div>

                            <div class="max-w-sm mx-auto lg:mx-0">

                                <p class="mb-6 text-gray-800 leading-loose">

                                    This side is a free Digital Business Card maker. Contactless, smart, and virtual
                                    business card enabled with a Link, QR code &amp; NFC technology. Share
                                    professional and business details with just one tap. No app is needed.

                                </p>

                                <div><a class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-green-600 hover:bg-green-700 text-white font-semibold rounded-l-xl rounded-t-xl transition duration-200"
                                        href="register.html">Get Started</a><a
                                        class="inline-block w-full lg:w-auto py-2 px-6 leading-loose text-white font-semibold bg-gray-900 border-2 border-gray-700 hover:border-gray-600 rounded-l-xl rounded-t-xl transition duration-200"
                                        href="pwh-rajeev.html">Sample card</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="hidden lg:block w-full lg:w-1/2 px-4 flex items-center justify-center">

                        <div class="relative web-index"><img
                                class="h-128 w-full max-w-lg object-cover rounded-3xl md:rounded-br-none"
                                src="{{config('constants.BANNER_IMG')}}" alt=""><img
                                class="hidden md:block absolute web-nav-top"></div>

                    </div>

                </div>

            </div>

        </div>


        <div class="hidden navbar-menu relative z-50">

            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>

            <nav
                class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">

                <div class="flex items-center mb-8">

                    <a class="mr-auto text-3xl font-bold leading-none" href="{{route('index')}}"><img class="h-10"
                            src="{{asset('asset/images/web/elements/63f7a21c55ef5.png')}}"
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
                                href="#how-it-works">How it works?</a>


                        </li>

                        <li class="mb-1">


                            <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                                href="#features">Features</a>


                        </li>

                        <li class="mb-1">


                            <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                                href="#pricing">Pricing</a>


                        </li>

                        <li class="mb-1">

                            <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded"
                                href="contact-us.html">Contact</a>

                        </li>

                        <div @click.away="open = false" @click="open = !open"
                            class="block p-4 text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded transition duration-200"
                            x-data="{ open: false }">

                            <a
                                class="text-lg font-semibold text-gray-400 hover:bg-red-50 hover:text-red-600 rounded dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 hover:text-white focus:text-gray-900 hover:bg-transparent focus:bg-gray-200 focus:outline-none focus:shadow-outline">

                                <span>EN</span>



                            </a>

                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="journal-scroll absolute right-0 w-full h-80 overflow-y-scroll mt-2 origin-top-right rounded-lg shadow-lg md:w-40">

                                <div class="px-2 py-2 bg-white capitalize rounded-sm shadow dark-mode:bg-gray-800">

                                </div>

                            </div>

                        </div>




                    </ul>

                </div>

                <div class="mt-auto">

                    <div class="pt-6">


                        <a class="block px-4 py-3 mb-3 leading-loose text-white text-xs text-center font-semibold leading-none bg-red-600 hover:bg-red-700 rounded-l-xl rounded-t-xl"
                            href="{{route('login')}}">Sign In</a>


                    </div>

                    <p class="my-4 text-xs text-center text-red-400">

                        <span><span id="year"></span> Free Digital Business Cards maker . All rights
                            reserved.</span>

                    </p>

                    <div class="text-center"><a class="inline-block px-1" href="#"
                            target="_blank"><img src="{{asset('asset/frontend/assets/social/facebook.svg')}}"
                                alt=""></a><a class="inline-block px-1" href="#"
                            target="_blank"><img src="{{asset('asset/frontend/assets/social/twitter.svg')}}"
                                alt=""></a><a class="inline-block px-1" href="#"
                            target="_blank"><img src="{{asset('asset/frontend/assets/social/instagram.svg')}}"
                                alt=""></a></div>

                </div>

            </nav>

        </div>

    </section>
    <section id="how-it-works">

        <div class="skew skew-top mr-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">

                <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>

            </svg>

        </div>

        <div class="skew skew-top ml-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">

                <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>

            </svg>

        </div>

        <div class="py-20 bg-gray-50 radius-for-skewed">

            <div class="container mx-auto px-4">



                <div class="flex flex-wrap items-center">

                    <div class="w-full lg:w-1/2 mb-12 lg:mb-0">

                        <div class="max-w-md lg:mx-auto">

                            <span class="text-green-600 font-bold">One card to reach millions!!</span>

                            <h2 class="my-2 text-4xl lg:text-5xl font-bold font-heading">

                                Smart Business Card</h2>

                            <p class="mb-6 text-gray-500 leading-loose">

                                Create your own interactive digital business card cum mini website, and share your
                                vCard via a personalized link, QR code, and NFC in just one tap or scan.

                            </p>



                            <ul class="text-gray-500 font-bold">

                                <li class="flex mb-4">

                                    <svg class="mr-2 w-6 h-6 text-green-700" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>Digital vCard</span>

                                </li>

                                <li class="flex mb-4">

                                    <svg class="mr-2 w-6 h-6 text-green-700" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>QR code for Business Card</span>

                                </li>

                                <li class="flex mb-4">

                                    <svg class="mr-2 w-6 h-6 text-green-700" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>NFC enabled Business Card</span>

                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="w-full lg:w-1/2 flex flex-wrap -mx-4">

                        <div class="mb-8 lg:mb-0 w-full md:w-1/2 px-4">

                            <div class="mb-8 py-6 pl-6 pr-4 shadow rounded bg-white">

                                <span class="mb-4 inline-block p-3 rounded-lg bg-green-100">

                                    <svg class="w-8 h-8 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />

                                    </svg>

                                </span>

                                <h4 class="mb-2 text-2xl font-bold font-heading">Photo Gallery</h4>

                                <p class="text-gray-500 leading-loose">

                                    You can showcase your product or service images on your digital business card.
                                </p>

                            </div>

                            <div class="py-6 pl-6 pr-4 shadow rounded bg-white">

                                <span class="mb-4 inline-block p-3 rounded-lg bg-green-100">

                                    <svg class="w-10 h-10 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path
                                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">

                                        </path>

                                    </svg>

                                </span>

                                <h4 class="mb-2 text-2xl font-bold font-heading">Services &amp; Products</h4>

                                <p class="text-gray-500 leading-loose">

                                    You can add your services and products with a short description and a WhatsApp
                                    inquiry button. This helps you for a high chance to convert your visitor into a
                                    business lead.

                                </p>

                            </div>

                        </div>

                        <div class="w-full md:w-1/2 lg:mt-20 px-4">

                            <div class="mb-8 py-6 pl-6 pr-4 shadow rounded-lg bg-white">

                                <span class="mb-4 inline-block p-3 rounded bg-green-100">

                                    <svg class="w-10 h-10 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewbox="0 0 24 24" stroke="currentColor">

                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">

                                        </path>

                                    </svg>

                                </span>

                                <h4 class="mb-2 text-2xl font-bold font-heading">Save vCard</h4>

                                <p class="text-gray-500 leading-loose">

                                    Visitors can save your digital business card in their phone in a vCard file
                                    format.</p>

                            </div>

                            <div class="py-6 pl-6 pr-4 shadow rounded-lg bg-white">

                                <span class="mb-4 inline-block p-3 rounded bg-green-100">

                                    <svg class="w-10 h-10 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>

                                        <path
                                            d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">

                                        </path>

                                    </svg>

                                </span>

                                <h4 class="mb-2 text-2xl font-bold font-heading">Businesses, Professionals, and
                                    Freelancers.</h4>

                                <p class="text-gray-500 leading-loose">

                                    This site helps to send relevant visitors on your digital vCard which can convert
                                    into clients.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="skew skew-bottom mr-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">

                <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>

            </svg>

        </div>

        <div class="skew skew-bottom ml-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">

                <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>

            </svg>

        </div>

    </section>

    <section id="features">

        <div class="skew skew-top mr-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">

                <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>

            </svg>

        </div>

        <div class="skew skew-top ml-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">

                <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>

            </svg>

        </div>

        <div class="py-20 bg-gray-50 radius-for-skewed">

            <div class="container mx-auto px-4">

                <div class="mb-16 max-w-md mx-auto text-center">

                    <span class="text-green-600 font-bold">Why Us?</span>

                    <h2 class="text-4xl md:text-5xl font-bold">Digital vCard&#039;s Features</h2>

                </div>

                <div class="flex flex-wrap -mx-4 shadow">

                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded ">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">

                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />

                            </svg>

                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">WhatsApp Enabled</h4>

                        <p class="text-gray-500 leading-loose">

                            You can ON and OFF WhatsApp Chat Feature on your digital business card.</p>

                    </div>

                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded ">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">

                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />

                            </svg>

                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Photo Gallery</h4>

                        <p class="text-gray-500 leading-loose">

                            You can add product and service images or any business-related images in your gallery
                            area.

                        </p>

                    </div>

                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded ">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Services &amp; Products</h4>

                        <p class="text-gray-500 leading-loose">

                            You can add your services and products with images and short descriptions in this
                            section.</p>

                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded ">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Payment Details</h4>

                        <p class="text-gray-500 leading-loose">

                            You can add your all accepted payment methods on your digital business card.</p>

                    </div>

                </div>





                <div class="flex flex-wrap my-3 shadow -mx-4">

                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Business Hours</h4>

                        <p class="text-gray-500 leading-loose">

                            You can display your business opening hours. Your visitors can see your business hours
                            on your digital business card.

                        </p>

                    </div>

                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Business links</h4>

                        <p class="text-gray-500 leading-loose">

                            You can integrate your business links like online shopping, appointments, orders, and
                            YouTube videos with your digital business card.</p>

                    </div>





                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Google Maps</h4>

                        <p class="text-gray-500 leading-loose">

                            You can show your business location on Google Maps. Visitors can easily navigate to your
                            location.

                        </p>

                    </div>





                    <div class="w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded ">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />

                            </svg>





                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Social Media Links</h4>

                        <p class="text-gray-500 leading-loose">

                            Your all social media platform are in one place on your digital business card. Stay
                            connected with your customers.

                        </p>

                    </div>

                </div>







                <div class="flex flex-wrap my-3 shadow -mx-4">

                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded ">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Modern Theme</h4>

                        <p class="text-gray-500 leading-loose">

                            We used a modern theme for the user interface. It is fully responsive and interactive.
                        </p>

                    </div>





                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded ">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Clean UI Design</h4>

                        <p class="text-gray-500 leading-loose">

                            We created all designs professionally. It made with latest frameworks.</p>

                    </div>

                    <div class="mb-12 lg:mb-0 w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded ">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">Faster Loading</h4>

                        <p class="text-gray-500 leading-loose">

                            We give more importance to page load. Your digital business card loads faster than
                            business websites.

                        </p>

                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/4 px-4 py-6 bg-white rounded">

                        <span class="mb-4 md:mb-6 inline-block bg-green-100 p-3 text-green-500 rounded">



                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />

                            </svg>



                        </span>

                        <h4 class="mb-4 text-2xl font-bold font-heading">URL, QR, NFC</h4>

                        <p class="text-gray-500 leading-loose">

                            You can choose your digital vCard&#039;s unique link. QR code will automatically
                            generate. You can connect it with an NFC business card.

                        </p>

                    </div>

                </div>



            </div>

        </div>

        <div class="skew skew-bottom mr-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">

                <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>

            </svg>

        </div>

        <div class="skew skew-bottom ml-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">

                <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>

            </svg>

        </div>

    </section>



    <section id="pricing">

        <div class="skew skew-top mr-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">

                <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>

            </svg>

        </div>

        <div class="skew skew-top ml-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">

                <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>

            </svg>

        </div>

        <div class="py-20 bg-gray-50 radius-for-skewed">

            <div class="container mx-auto px-4">

                <div class="max-w-2xl mx-auto text-center mb-16">

                    <span class="text-green-600 font-bold">Pricing</span>

                    <h2 class="mb-2 text-4xl lg:text-5xl font-bold font-heading">Digital Business Card</h2>

                    <p class="mb-6 text-gray-500">Price Revising Soon! Limited Period Offer!! Hurry Up!!!</p>

                </div>



                <div class="flex flex-wrap justify-center items-center -mx-4">


                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">

                        <div class="p-8 bg-white shadow rounded">

                            <h4 class="mb-2 text-2xl font-bold font-heading">

                                Trial</h4>

                            <span class="text-6xl font-bold ">Free</span>

                            <span class="text-gray-500 text-xs">


                                /Forever</span>





                            <p class="mt-3 mb-6 text-gray-500 leading-loose">

                                Get a trial for a digital business card with limited features.</p>

                            <ul class="mb-6 text-gray-500">

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>1

                                        vCards</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>1

                                        Services/Products</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>1

                                        Galleries</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>3

                                        Card Features</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>1

                                        Payment Listed</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>No Personalized Link

                                    </span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>No Hide Branding

                                    </span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>No Free Setup

                                    </span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>No Free Support

                                    </span>

                                </li>

                            </ul>

                            <a class="inline-block text-center py-2 px-4 w-full rounded-l-xl rounded-t-xl bg-green-600 hover:bg-green-700 text-white font-bold leading-loose transition duration-200"
                                href="register.html">Get Started</a>

                        </div>

                    </div>


                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">

                        <div class="p-8 bg-green-600 shadow rounded">

                            <h4 class="mb-2 text-2xl font-bold text-white">

                                PRO</h4>

                            <span class="text-6xl font-bold text-white">₹499</span>

                            <span class="text-gray-50 text-xs">


                                /Forever</span>





                            <p class="mt-3 mb-6 text-gray-50 leading-loose">

                                Get more features of digital business card with limitless possibilities.</p>

                            <ul class="mb-6 text-gray-50">

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>1

                                        vCards</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>10

                                        Services/Products</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>10

                                        Galleries</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>Unlimited

                                        Card Features</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>1

                                        Payment Listed</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span> Personalized Link

                                        Available</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span> Hide Branding

                                        Available</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span> Free Setup

                                        Available</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span> Free Support

                                        Available</span>

                                </li>

                            </ul>

                            <a class="inline-block text-center py-2 px-4 w-full rounded-l-xl rounded-t-xl bg-white hover:bg-gray-100 font-bold leading-loose transition duration-200"
                                href="register.html">Get Started</a>

                        </div>

                    </div>


                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">

                        <div class="p-8 bg-green-600 shadow rounded">

                            <h4 class="mb-2 text-2xl font-bold text-white">

                                TEAM</h4>

                            <span class="text-6xl font-bold text-white">₹1499</span>

                            <span class="text-gray-50 text-xs">


                                /Forever</span>





                            <p class="mt-3 mb-6 text-gray-50 leading-loose">

                                Get full features of digital business cards with limitless possibilities.</p>

                            <ul class="mb-6 text-gray-50">

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>5

                                        vCards</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>10

                                        Services/Products</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>10

                                        Galleries</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>Unlimited

                                        Card Features</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span>1

                                        Payment Listed</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span> Personalized Link

                                        Available</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span> Hide Branding

                                        Available</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span> Free Setup

                                        Available</span>

                                </li>

                                <li class="mb-2 flex">

                                    <svg class="mr-2 w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 20 20" fill="currentColor">

                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>

                                    </svg>

                                    <span> Free Support

                                        Available</span>

                                </li>

                            </ul>

                            <a class="inline-block text-center py-2 px-4 w-full rounded-l-xl rounded-t-xl bg-white hover:bg-gray-100 font-bold leading-loose transition duration-200"
                                href="register.html">Get Started</a>

                        </div>

                    </div>


                </div>

            </div>

        </div>

        <div class="skew skew-bottom mr-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">

                <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>

            </svg>

        </div>

        <div class="skew skew-bottom ml-for-radius">

            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">

                <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>

            </svg>

        </div>

    </section>
    
@endsection
