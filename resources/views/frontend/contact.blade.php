@extends('frontend.index')
@section('title',('contact'))

@section('content')
<section>
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
                <h2 class="text-4xl font-bold font-heading">Contact</h2>
                <p class="text-gray-500">Have any questions? Let’s talk about it.</p>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="mb-8 lg:mb-0 w-full lg:w-1/3 px-4">
                    <div class="py-12 lg:py-20 rounded bg-white shadow text-center">
                        <h3 class="mb-8 lg:mb-20 text-3xl font-bold font-heading">Office
                        </h3>
                        <p class="text-gray-400">ABC</p>
                        <p class="text-gray-400">ABC
                            110059</p>
                    </div>
                </div>
                <div class="mb-8 lg:mb-0 w-full lg:w-1/3 px-4">
                    <div class="py-12 lg:py-20 rounded bg-white shadow text-center">
                        <h3 class="mb-8 lg:mb-20 text-3xl font-bold font-heading">Support
                        </h3>
                        <p class="text-gray-400">Email:

                            <a href="#" class="__cf_email__"
                                data-cfemail="">[email&#160;protected]</a>
                        </p>
                        <p class="text-gray-400">WhatsApp Chat:

                            +91 0000000000</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 px-4 flex items-stretch">
                    <div class="py-12 lg:py-20 w-full rounded bg-white shadow text-center">
                        <h3 class="mb-8 lg:mb-20 text-3xl font-bold font-heading">Socials
                        </h3>
                        <div class="flex justify-center">
                            <a class="mr-3" href="#" target="_blank">
                                <img class="w-8 h-8" src="{{asset('asset/frontend/assets/social/facebook.svg')}}" alt="">
                            </a>
                            <a class="mr-3" href="#" target="_blank">
                                <img class="w-8 h-8" src="{{asset('asset/frontend/assets/social/twitter.svg')}}" alt="">
                            </a>
                            <a href="#" target="_blank">
                                <img class="w-8 h-8" src="{{asset('asset/frontend/assets/social/instagram.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
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
@endsection