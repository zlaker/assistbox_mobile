@props(['title' => 'Voxi Book Player', 'description' => 'Your personal audiobook library with powerful statistics.', 'keywords' => 'audiobook, player, statistics, ios, iphone, ipad', 'noindex' => false, 'landing' => false, 'page' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title id="pageTitle">{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta id="metaDescription" name="description" content="{{ $description }}">
        <meta id="metaKeywords" name="keywords" content="{{ $keywords }}">
        <meta name="author" content="{{ config('app.name') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @if($noindex)
        <meta name="robots" content="noindex,nofollow">
        @endif

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon -->
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

        <!-- Css -->
        <link href="{{ asset('landing/assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('landing/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('landing/assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('landing/assets/css/tailwind.css') }}">

    </head>
    
    <body class="font-nunito text-base text-slate-900 dark:text-white dark:bg-slate-900" @if($page) data-page="{{ $page }}" @endif>
        
        <x-landing.header :landing="$landing" />

        {{ $slot }}

        <x-landing.footer />

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-primary text-white leading-9"><i class="uil uil-arrow-up"></i></a>

        <!-- Switcher -->
        <div class="fixed top-[30%] -right-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow-sm dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('landing/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('landing/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('landing/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('landing/assets/js/app.js') }}"></script>
        <script src="{{ asset('landing/assets/js/i18n.js') }}"></script>
    </body>
</html>
