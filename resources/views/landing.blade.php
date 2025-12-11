<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title id="pageTitle">Voxi Book Player - Audiobook Player & Statistics for iOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta id="metaDescription" name="description" content="Free audiobook player for iPhone & iPad with powerful listening statistics. Track progress, sleep timer, speed control 0.5x-2.0x, VoiceOver support. Download from App Store.">
        <meta id="metaKeywords" name="keywords" content="audiobook player, audiobook app, ios audiobook player, iphone audiobook, ipad audiobook, listening statistics, audiobook tracker, sleep timer, voiceover audiobook, free audiobook player, m4b player, mp3 audiobook">
        <meta name="author" content="Voxi Book Player">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="robots" content="index,follow">

        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url('/') }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="Voxi Book Player - Audiobook Player & Statistics">
        <meta property="og:description" content="Free audiobook player for iPhone & iPad with powerful listening statistics. Track every moment, never lose progress.">
        <meta property="og:image" content="{{ asset('landing/assets/images/app/basic_player_ios.png') }}">
        <meta property="og:site_name" content="Voxi Book Player">
        <meta property="og:locale" content="{{ app()->getLocale() }}">
        <meta property="og:locale:alternate" content="en_US">
        <meta property="og:locale:alternate" content="ru_RU">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Voxi Book Player - Audiobook Player & Statistics">
        <meta name="twitter:description" content="Free audiobook player for iPhone & iPad with powerful listening statistics. Track every moment, never lose progress.">
        <meta name="twitter:image" content="{{ asset('landing/assets/images/app/basic_player_ios.png') }}">

        <!-- App Store Smart Banner -->
        <meta name="apple-itunes-app" content="app-id=6756003204">

        <!-- Theme Color -->
        <meta name="theme-color" content="#4a6fa5">
        <meta name="msapplication-TileColor" content="#4a6fa5">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Structured Data (JSON-LD) -->
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "MobileApplication",
            "name": "Voxi Book Player",
            "operatingSystem": "iOS",
            "applicationCategory": "MultimediaApplication",
            "offers": {
                "@@type": "Offer",
                "price": "0",
                "priceCurrency": "USD"
            },
            "aggregateRating": {
                "@@type": "AggregateRating",
                "ratingValue": "5",
                "ratingCount": "1"
            },
            "description": "Free audiobook player for iPhone & iPad with powerful listening statistics. Track every moment, never lose progress.",
            "downloadUrl": "https://apps.apple.com/us/app/voxi-book-player/id6756003204",
            "softwareVersion": "1.0",
            "author": {
                "@@type": "Organization",
                "name": "Voxi Book Player"
            },
            "screenshot": "{{ asset('landing/assets/images/app/basic_player_ios.png') }}",
            "featureList": "Audiobook playback, Listening statistics, Sleep timer, Speed control 0.5x-2.0x, VoiceOver support, Background playback, Lock screen controls"
        }
        </script>

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
    
    <body class="font-nunito text-base text-slate-900 dark:text-white dark:bg-slate-900">
        
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll">
            <div class="container relative">
                <!-- Logo container-->
                <a class="logo" href="{{ route('home') }}">
                    <!-- Dark logo - always visible on mobile, controlled by CSS on desktop -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 md:h-12 l-dark" preserveAspectRatio="xMidYMid meet" viewBox="0 0 2048 2048">
                        <defs>
                            <linearGradient gradientUnits="userSpaceOnUse" id="LogoGradient1" x1="1055.79" x2="991.721" y1="1754.26" y2="289.589">
                                <stop offset="0" stop-color="rgb(68,89,113)" stop-opacity="1"></stop>
                                <stop offset="1" stop-color="rgb(96,148,178)" stop-opacity="1"></stop>
                            </linearGradient>
                        </defs>
                        <path d="M 712.931 300.908 C 725.004 300.283 741.528 300.877 754.035 300.882 L 1259.56 300.874 C 1382.32 300.869 1473.8 308.15 1537.54 437.533 C 1561.49 486.13 1558.67 529.989 1558.61 581.609 L 1558.57 1479.06 C 1558.53 1550.09 1556.06 1601.77 1506.46 1659.83 C 1459.39 1714.94 1406.55 1738.53 1335.25 1744.95 L 788.387 1744.99 C 749.416 1745.02 709.062 1746.36 670.742 1738.83 C 568.395 1718.7 490.692 1625.81 490.314 1521.4 L 490.318 545.61 C 489.964 416.506 576.43 300.808 712.931 300.908 z M 894.6 493.49 C 739.558 493.218 685.402 517.814 687.368 683.748 C 687.59 702.514 710.026 711.481 722.875 697.198 C 739.211 679.039 701.444 600.764 765.568 552.858 C 804.019 524.132 854.277 532.975 899.234 532.972 L 1188.67 532.954 C 1204.13 532.913 1219.59 532.827 1235.04 532.553 C 1307.6 531.268 1322.14 594.502 1322.02 650.766 L 1322.04 1182.24 C 1322.06 1215.7 1322.62 1258.34 1274.82 1258.55 L 849.599 1258.37 C 801.259 1258.42 727.14 1276.13 726.522 1213.12 L 726.685 900.165 C 726.736 887.28 730.968 860.542 720.775 851.471 C 714.263 849.841 689.74 846.01 689.033 856.511 C 686.631 892.215 687.816 929.219 687.824 965.137 L 687.8 1383.53 C 687.545 1538.11 722.722 1558.31 877.428 1558.21 L 1177.03 1558.18 C 1206.51 1558.19 1244.92 1560.66 1272.84 1553.8 C 1352.12 1534.34 1360.9 1465.44 1360.87 1399.42 L 1360.84 663.978 C 1360.93 542.25 1327.89 493.375 1198.26 493.453 L 894.6 493.49 z M 1043.76 1170.27 C 1155.73 1159.13 1237.48 1059.34 1226.34 947.366 C 1215.19 835.397 1115.39 753.661 1003.42 764.81 C 891.464 775.958 809.739 875.75 820.879 987.708 C 832.018 1099.67 931.804 1181.4 1043.76 1170.27 z M 1126.12 648 C 1137.07 644.237 1137.6 641.352 1140.79 630.793 C 1138.69 625.632 1136.56 618.549 1131.13 616.026 C 1122.03 611.794 951.516 613.794 926.94 613.896 C 903.542 618.172 902.926 646.961 933.528 647.627 C 992.977 648.923 1067.31 651.156 1126.12 648 z M 707.348 810.908 C 712.518 810.53 719.519 810.731 723.079 806.946 C 729.198 789.483 735.795 745.207 707.348 743.333 C 687.702 745.574 685.293 752.383 687.03 772.554 C 689.031 795.782 679.58 808.566 707.348 810.908 z" fill="url(#LogoGradient1)"></path>
                        <path d="M 1013.31 1320.53 C 1061.82 1314.04 1106.44 1348.01 1113.11 1396.5 C 1119.77 1444.98 1085.96 1489.73 1037.5 1496.57 C 988.791 1503.44 943.768 1469.42 937.07 1420.69 C 930.372 1371.95 964.55 1327.05 1013.31 1320.53 z M 1033.41 1452.99 C 1058.12 1448.47 1074.41 1424.69 1069.69 1400.02 C 1064.97 1375.35 1041.05 1359.25 1016.42 1364.17 C 992.07 1369.03 976.193 1392.62 980.858 1417.01 C 985.522 1441.4 1008.98 1457.46 1033.41 1452.99 z" fill="rgb(81,114,144)"></path>
                        <path d="M 1007.56 806.058 C 1020.3 805.461 1035.62 806.285 1048.95 806.058 L 1048.95 942.897 C 1010.94 928.185 969.136 946.663 967.679 989.51 C 965.916 1041.37 1033.66 1067.63 1068.52 1030.15 C 1093.29 1003.51 1086.48 968.276 1086.49 934.342 L 1086.47 819.614 C 1146.43 835.352 1187.98 905.547 1190.28 965.019 C 1187.12 1122.89 996.475 1186.05 893.941 1069.03 C 806.8 969.584 876.766 821.394 1007.56 806.058 z" fill="rgb(81,114,144)"></path>
                    </svg>
                    <!-- White logo - hidden on mobile, controlled by CSS on desktop -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 md:h-12 l-light hidden md:inline-block" preserveAspectRatio="xMidYMid meet" viewBox="0 0 2048 2048">
                        <path d="M 712.931 300.908 C 725.004 300.283 741.528 300.877 754.035 300.882 L 1259.56 300.874 C 1382.32 300.869 1473.8 308.15 1537.54 437.533 C 1561.49 486.13 1558.67 529.989 1558.61 581.609 L 1558.57 1479.06 C 1558.53 1550.09 1556.06 1601.77 1506.46 1659.83 C 1459.39 1714.94 1406.55 1738.53 1335.25 1744.95 L 788.387 1744.99 C 749.416 1745.02 709.062 1746.36 670.742 1738.83 C 568.395 1718.7 490.692 1625.81 490.314 1521.4 L 490.318 545.61 C 489.964 416.506 576.43 300.808 712.931 300.908 z M 894.6 493.49 C 739.558 493.218 685.402 517.814 687.368 683.748 C 687.59 702.514 710.026 711.481 722.875 697.198 C 739.211 679.039 701.444 600.764 765.568 552.858 C 804.019 524.132 854.277 532.975 899.234 532.972 L 1188.67 532.954 C 1204.13 532.913 1219.59 532.827 1235.04 532.553 C 1307.6 531.268 1322.14 594.502 1322.02 650.766 L 1322.04 1182.24 C 1322.06 1215.7 1322.62 1258.34 1274.82 1258.55 L 849.599 1258.37 C 801.259 1258.42 727.14 1276.13 726.522 1213.12 L 726.685 900.165 C 726.736 887.28 730.968 860.542 720.775 851.471 C 714.263 849.841 689.74 846.01 689.033 856.511 C 686.631 892.215 687.816 929.219 687.824 965.137 L 687.8 1383.53 C 687.545 1538.11 722.722 1558.31 877.428 1558.21 L 1177.03 1558.18 C 1206.51 1558.19 1244.92 1560.66 1272.84 1553.8 C 1352.12 1534.34 1360.9 1465.44 1360.87 1399.42 L 1360.84 663.978 C 1360.93 542.25 1327.89 493.375 1198.26 493.453 L 894.6 493.49 z M 1043.76 1170.27 C 1155.73 1159.13 1237.48 1059.34 1226.34 947.366 C 1215.19 835.397 1115.39 753.661 1003.42 764.81 C 891.464 775.958 809.739 875.75 820.879 987.708 C 832.018 1099.67 931.804 1181.4 1043.76 1170.27 z M 1126.12 648 C 1137.07 644.237 1137.6 641.352 1140.79 630.793 C 1138.69 625.632 1136.56 618.549 1131.13 616.026 C 1122.03 611.794 951.516 613.794 926.94 613.896 C 903.542 618.172 902.926 646.961 933.528 647.627 C 992.977 648.923 1067.31 651.156 1126.12 648 z M 707.348 810.908 C 712.518 810.53 719.519 810.731 723.079 806.946 C 729.198 789.483 735.795 745.207 707.348 743.333 C 687.702 745.574 685.293 752.383 687.03 772.554 C 689.031 795.782 679.58 808.566 707.348 810.908 z" fill="white"></path>
                        <path d="M 1013.31 1320.53 C 1061.82 1314.04 1106.44 1348.01 1113.11 1396.5 C 1119.77 1444.98 1085.96 1489.73 1037.5 1496.57 C 988.791 1503.44 943.768 1469.42 937.07 1420.69 C 930.372 1371.95 964.55 1327.05 1013.31 1320.53 z M 1033.41 1452.99 C 1058.12 1448.47 1074.41 1424.69 1069.69 1400.02 C 1064.97 1375.35 1041.05 1359.25 1016.42 1364.17 C 992.07 1369.03 976.193 1392.62 980.858 1417.01 C 985.522 1441.4 1008.98 1457.46 1033.41 1452.99 z" fill="rgba(255,255,255,0.7)"></path>
                        <path d="M 1007.56 806.058 C 1020.3 805.461 1035.62 806.285 1048.95 806.058 L 1048.95 942.897 C 1010.94 928.185 969.136 946.663 967.679 989.51 C 965.916 1041.37 1033.66 1067.63 1068.52 1030.15 C 1093.29 1003.51 1086.48 968.276 1086.49 934.342 L 1086.47 819.614 C 1146.43 835.352 1187.98 905.547 1190.28 965.019 C 1187.12 1122.89 996.475 1186.05 893.941 1069.03 C 806.8 969.584 876.766 821.394 1007.56 806.058 z" fill="rgba(255,255,255,0.7)"></path>
                    </svg>
                </a>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <!--Language & Download buttons Start-->
                <ul class="buy-button list-none mb-0 mt-5 flex items-center">
                    <li class="inline ps-1 mb-0">
                        <button id="langSwitcher" class="relative group" title="Switch language">
                            <!-- Shown when scrolled (white bg) - colored button -->
                            <div class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide border-2 border-primary/50 align-middle duration-500 text-base text-center rounded-full bg-primary/10 hover:bg-primary/20 hover:border-primary text-primary font-bold text-xs"><span id="currentLang">EN</span></span></div>
                            <!-- Shown when NOT scrolled (dark bg) - white button -->
                            <div class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-white/20 hover:bg-white/30 border border-white/30 hover:border-white/50 text-white font-bold text-xs"><span id="currentLangLight">EN</span></span></div>
                        </button>
                    </li>
                    <li class="inline ps-1 mb-0">
                        <a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank">
                            <div class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-primary hover:bg-primary-700 border border-primary hover:border-primary-700 text-white"><i data-feather="download" class="size-4"></i></span></div>
                            <div class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide border border-gray-50 align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700"><i data-feather="download" class="size-4"></i></span></div>
                        </a>
                    </li>
                </ul>
                <!--Language & Download buttons End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-light">
                        <li><a href="{{ route('home') }}" class="sub-menu-item" data-i18n="nav.home">Home</a></li>
                        <li><a href="#features" class="sub-menu-item" data-i18n="nav.features">Features</a></li>
                        <li><a href="#about" class="sub-menu-item" data-i18n="nav.statistics">Statistics</a></li>
                        <li><a href="#testimonials" class="sub-menu-item" data-i18n="nav.whyVoxi">Why Voxi</a></li>
                        <li><a href="#download" class="sub-menu-item" data-i18n="nav.download">Download</a></li>
                        <li><a href="#news" class="sub-menu-item" data-i18n="nav.news">News</a></li>
                        <li><a href="{{ route('ios.support') }}" class="sub-menu-item" data-i18n="nav.support">Support</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="relative table w-full py-36 md:py-56 md:pb-0 overflow-hidden bg-[url('/landing/assets/images/app/bg.png')] bg-top bg-no-repeat bg-fixed bg-cover">
            <div class="absolute inset-0 bg-primary opacity-80"></div>
            <div class="container relative z-2">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-8 md:col-span-7 md:mb-16">
                        <div class="md:me-6">
                            <h4 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5" data-i18n="hero.title">Voxi Book Player</h4>
                            <p class="text-white/90 text-xl font-medium mb-3" data-i18n="hero.subtitle">Audiobook Player & Statistics</p>
                            <p class="text-white/70 text-lg max-w-xl" data-i18n="hero.description">Your personal audiobook library with powerful statistics. Track every moment, never lose progress. Built for everyone, enhanced by community.</p>
                        
                            <div class="mt-6">
                                <a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank"><img src="{{ asset('landing/assets/images/app/app.png') }}" class="inline-block m-1" alt="Download on App Store"></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-4 md:col-span-5 md:mt-0">
                        <div class="relative flex items-center justify-center min-h-[400px] md:min-h-[500px]">
                            <div class="absolute h-64 w-64 bg-white/10 bottom-1/4 end-1/4 -z-0 rounded-3xl animate-[spin_15s_linear_infinite]"></div>
                            <div class="absolute h-48 w-48 bg-primary/30 top-1/4 start-1/4 -z-0 rounded-3xl animate-[spin_10s_linear_infinite_reverse]"></div>
                            <img src="{{ asset('landing/assets/images/app/basic_player_ios.png') }}" class="relative z-1 rounded-3xl shadow-2xl" style="max-width: 190px;" alt="Voxi Book Player">
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="relative">
            <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
                <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Start Section-->
        <section id="features" class="relative md:py-24 py-16 overflow-hidden">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-primary text-sm font-bold uppercase mb-2" data-i18n="features.label">Features</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold" data-i18n="features.title">Why Voxi Book Player?</h3>

                    <p class="text-slate-400 max-w-xl mx-auto" data-i18n="features.description">Remember the warmth of that audiobook you've been listening to for years? Voxi keeps every precious moment.</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
                    <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-chart-line"></i>
                        </div>

                        <div class="content mt-7">
                            <span class="title h5 text-lg font-medium" data-i18n="features.statistics.title">📊 Powerful Statistics</span>
                            <p class="text-slate-400 mt-3" data-i18n="features.statistics.description">Track your listening journey. See exactly how much time you've spent with each book. Your audiobook journey documented forever.</p>
                        </div>
                    </div>
                    <!--end feature content-->

                    <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-headphones"></i>
                        </div>

                        <div class="content mt-7">
                            <span class="title h5 text-lg font-medium" data-i18n="features.player.title">🎵 Professional Player</span>
                            <p class="text-slate-400 mt-3" data-i18n="features.player.description">Speed control 0.5x-2.0x, sleep timer, customizable skip intervals. Lock screen controls and background playback.</p>
                        </div>
                    </div>
                    <!--end feature content-->

                    <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-lock-alt"></i>
                        </div>

                        <div class="content mt-7">
                            <span class="title h5 text-lg font-medium" data-i18n="features.privacy.title">🔒 Nothing Gets Lost</span>
                            <p class="text-slate-400 mt-3" data-i18n="features.privacy.description">Automatic archiving preserves all your statistics. Deleted books saved with full history. Your data stays private on your device.</p>
                        </div>
                    </div>
                    <!--end feature content-->
                </div>
            </div><!--end container-->

            <div id="about" class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
                    <div class="relative flex items-center justify-center min-h-[350px]">
                        <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
                        <img src="{{ asset('landing/assets/images/app/profile_ios.png') }}" class="relative z-10 rounded-3xl shadow-2xl" style="max-width: 190px;" alt="Voxi Statistics">
                    </div>

                    <div class="lg:ms-8">
                        <h4 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium" data-i18n="about.stats.title">📊 Powerful Statistics <br> Your Listening Story</h4>
                        <p class="text-slate-400" data-i18n="about.stats.description">Years from now, you'll look back and remember: "I listened to War and Peace for 6 months, spending 47 hours with Tolstoy." Voxi preserves these memories.</p>
                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.stats.item1">Automatic listening time tracking for every book</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.stats.item2">Progress calculation based on actual listening time</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.stats.item3">Archive system - nothing gets lost</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.stats.item4">Complete listening history preserved forever</span></li>
                        </ul>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    <div class="relative flex items-center justify-center min-h-[350px] order-1 md:order-2">
                        <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
                        <img src="{{ asset('landing/assets/images/app/basic_player_ios.png') }}" class="relative z-10 rounded-3xl shadow-2xl" style="max-width: 190px;" alt="Voxi Player">
                    </div>

                    <div class="lg:me-8 order-2 md:order-1">
                        <h4 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium" data-i18n="about.player.title">🎵 Professional Audio Player</h4>
                        <p class="text-slate-400" data-i18n="about.player.description">Full-featured audio player designed for long-form listening. Every control you need, right at your fingertips.</p>
                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.player.item1">Playback speed 0.5x - 2.0x in 0.1x increments</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.player.item2">Sleep timer (5-90 min) & auto shutdown</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.player.item3">Customizable skip interval (15-90 seconds)</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.player.item4">Lock screen controls with full metadata</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.player.item5">Background playback & auto position saving</span></li>
                        </ul>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
                    <div class="relative flex items-center justify-center min-h-[350px]">
                        <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
                        <img src="{{ asset('landing/assets/images/app/book_files_list_ios.png') }}" class="relative z-10 rounded-3xl shadow-2xl" style="max-width: 190px;" alt="Voxi Library">
                    </div>

                    <div class="lg:ms-8">
                        <h4 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium" data-i18n="about.library.title">📚 Complete Library Management</h4>
                        <p class="text-slate-400" data-i18n="about.library.description">Full control over your audiobook collection. Custom covers, metadata editing, drag & drop organization.</p>
                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.library.item1">Custom book and track covers from photos</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.library.item2">Edit all metadata (title, author, narrator)</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.library.item3">Drag & drop reordering for books and files</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.library.item4">Search by title, author, or narrator</span></li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> <span data-i18n="about.library.item5">Batch metadata updates</span></li>
                        </ul>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold" data-i18n="keyFeatures.title">✨ Key Features Summary</h3>
                    <p class="text-slate-400 max-w-xl mx-auto" data-i18n="keyFeatures.description">Everything you need for the perfect audiobook experience. Built for book lovers, by listeners.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-center">
                    <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2">
                        <div class="grid grid-cols-1 gap-[30px]">
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="smartphone" class="size-5"></i>
                                </div>
                                <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                                    <h4 class="mb-0 text-lg font-medium" data-i18n="keyFeatures.devices.title">iPhone & iPad</h4>
                                    <p class="text-slate-400 mt-3" data-i18n="keyFeatures.devices.description">Optimized for all screen sizes with split view on iPad</p>
                                </div>
                            </div>
                            <!--end feature-->
                            
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="type" class="size-5"></i>
                                </div>
                                <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                                    <h4 class="mb-0 text-lg font-medium" data-i18n="keyFeatures.fonts.title">7+ Custom Fonts</h4>
                                    <p class="text-slate-400 mt-3" data-i18n="keyFeatures.fonts.description">Font size 0.5x-2.0x, Light/Dark/System themes</p>
                                </div>
                            </div>
                            <!--end feature-->
                            
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="globe" class="size-5"></i>
                                </div>
                                <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                                    <h4 class="mb-0 text-lg font-medium" data-i18n="keyFeatures.language.title">Multi-Language</h4>
                                    <p class="text-slate-400 mt-3" data-i18n="keyFeatures.language.description">Russian & English, more languages coming soon</p>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                    </div>

                    <div class="lg:col-span-4 md:col-span-12 lg:mx-8 lg:order-2 order-1">
                        <img src="{{ asset('landing/assets/images/app/features_ios.png') }}" class="mx-auto relative z-10 rounded-3xl shadow-2xl" style="max-width: 190px;" alt="Voxi Features">
                    </div>

                    <div class="lg:col-span-4 md:col-span-6 order-3">
                        <div class="grid grid-cols-1 gap-[30px]">
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="eye" class="size-5"></i>
                                </div>
                                <div class="flex-1 ms-4">
                                    <h4 class="mb-0 text-lg font-medium" data-i18n="keyFeatures.accessibility.title">♿ Accessibility First</h4>
                                    <p class="text-slate-400 mt-3" data-i18n="keyFeatures.accessibility.description">Full VoiceOver support, Dynamic Type, always free</p>
                                </div>
                            </div>
                            <!--end feature-->
                            
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="message-circle" class="size-5"></i>
                                </div>
                                <div class="flex-1 ms-4">
                                    <h4 class="mb-0 text-lg font-medium" data-i18n="keyFeatures.community.title">💬 Community-Driven</h4>
                                    <p class="text-slate-400 mt-3" data-i18n="keyFeatures.community.description">In-app support, feature requests shape development</p>
                                </div>
                            </div>
                            <!--end feature-->
                            
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="shield" class="size-5"></i>
                                </div>
                                <div class="flex-1 ms-4">
                                    <h4 class="mb-0 text-lg font-medium" data-i18n="keyFeatures.privacyFirst.title">🔒 Privacy First</h4>
                                    <p class="text-slate-400 mt-3" data-i18n="keyFeatures.privacyFirst.description">All data local, no tracking, no ads, optional cloud sync</p>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div id="testimonials" class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-primary text-base mb-2" data-i18n="whyVoxi.label">🌟 Why Voxi Book Player?</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold" data-i18n="whyVoxi.title">Perfect For</h3>

                    <p class="text-slate-400 max-w-xl mx-auto" data-i18n="whyVoxi.description">Start your documented audiobook journey today. Every minute counts, every book matters, and nothing gets lost.</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
                    <div class="group p-6 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto mb-5">
                            📖
                        </div>
                        <h5 class="font-medium text-lg text-center mb-3" data-i18n="whyVoxi.bookLovers.title">For Book Lovers</h5>
                        <p class="text-slate-400 text-center" data-i18n="whyVoxi.bookLovers.description">Years from now, you'll look back and remember exactly how long you spent with each beloved book. Voxi preserves these memories.</p>
                    </div>
                    
                    <div class="group p-6 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto mb-5">
                            ♿
                        </div>
                        <h5 class="font-medium text-lg text-center mb-3" data-i18n="whyVoxi.accessibility.title">For Accessibility</h5>
                        <p class="text-slate-400 text-center" data-i18n="whyVoxi.accessibility.description">We believe audiobooks should be accessible to everyone. Accessibility features are our priority and will always be free.</p>
                    </div>
                    
                    <div class="group p-6 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto mb-5">
                            🧘
                        </div>
                        <h5 class="font-medium text-lg text-center mb-3" data-i18n="whyVoxi.peaceOfMind.title">For Peace of Mind</h5>
                        <p class="text-slate-400 text-center" data-i18n="whyVoxi.peaceOfMind.description">Your progress, your statistics, your memories - nothing gets lost. Ever. Automatic archiving ensures your journey is documented forever.</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
                    <div class="group p-6 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto mb-5">
                            ⏱️
                        </div>
                        <h5 class="font-medium text-lg text-center mb-3" data-i18n="whyVoxi.longForm.title">Long-form Listeners</h5>
                        <p class="text-slate-400 text-center" data-i18n="whyVoxi.longForm.description">People who listen to books over months or years. Track your progress across epic fantasy series or years of learning.</p>
                    </div>
                    
                    <div class="group p-6 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto mb-5">
                            💬
                        </div>
                        <h5 class="font-medium text-lg text-center mb-3" data-i18n="whyVoxi.community.title">For Community</h5>
                        <p class="text-slate-400 text-center" data-i18n="whyVoxi.community.description">Built by listeners, for listeners. Your feedback shapes our development. Request features, and we'll build them.</p>
                    </div>
                    
                    <div class="group p-6 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 duration-500">
                        <div class="size-16 bg-primary/5 text-primary rounded-lg text-3xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto mb-5">
                            🎛️
                        </div>
                        <h5 class="font-medium text-lg text-center mb-3" data-i18n="whyVoxi.fullControl.title">Full Control</h5>
                        <p class="text-slate-400 text-center" data-i18n="whyVoxi.fullControl.description">Anyone who wants complete control over their audiobook library with custom covers, metadata editing, and organization.</p>
                    </div>
                </div>
            </div><!--end container-->

            <!-- All Features Section -->
            <div id="all-features" class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-primary text-sm font-bold uppercase mb-2" data-i18n="allFeatures.label">Complete Feature List</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold" data-i18n="allFeatures.title">📋 All Features</h3>
                    <p class="text-slate-400 max-w-xl mx-auto" data-i18n="allFeatures.description">Complete technical specification of everything Voxi Book Player can do</p>
                </div>

                <!-- Mobile: Compact overview grid (hidden - using full grid for all screens) -->
                <div class="hidden" id="features-compact">
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center">
                        <div class="text-2xl mb-1">🎧</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.playback.title">Playback</h5>
                        <span class="text-xs text-primary">8 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center">
                        <div class="text-2xl mb-1">🔊</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.background.title">Background Audio</h5>
                        <span class="text-xs text-primary">6 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center">
                        <div class="text-2xl mb-1">⏰</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.timers.title">Timers</h5>
                        <span class="text-xs text-primary">5 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center">
                        <div class="text-2xl mb-1">📚</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.library.title">Library</h5>
                        <span class="text-xs text-primary">8 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center">
                        <div class="text-2xl mb-1">📊</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.statistics.title">Statistics</h5>
                        <span class="text-xs text-primary">6 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center">
                        <div class="text-2xl mb-1">🎨</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.personalization.title">Personalization</h5>
                        <span class="text-xs text-primary">5 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center">
                        <div class="text-2xl mb-1">♿</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.accessibility.title">Accessibility</h5>
                        <span class="text-xs text-primary">5 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center">
                        <div class="text-2xl mb-1">📱</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.interface.title">Interface</h5>
                        <span class="text-xs text-primary">6 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm p-4 text-center col-span-2">
                        <div class="text-2xl mb-1">⚙️</div>
                        <h5 class="text-sm font-medium" data-i18n="allFeatures.technical.title">Technical</h5>
                        <span class="text-xs text-primary">7 <span data-i18n="allFeatures.items">features</span></span>
                    </div>
                </div>

                <!-- Mobile: Show details button (hidden - using full grid for all screens) -->
                <div class="hidden">
                    <button onclick="toggleFeaturesDetail()" id="features-toggle-btn" class="inline-flex items-center px-4 py-2 bg-primary/10 hover:bg-primary/20 text-primary rounded-lg text-sm font-medium transition-colors">
                        <span data-i18n="allFeatures.showDetails">Show all details</span>
                        <i class="uil uil-angle-down ms-1 text-lg" id="features-toggle-icon"></i>
                    </button>
                    <p class="text-xs text-slate-400 mt-2"><span class="font-medium">56</span> <span data-i18n="allFeatures.totalFeatures">features total</span></p>
                </div>

                <!-- Full feature grid (always visible on tablet+) -->
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-6" id="features-full">
                    <!-- Playback -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">🎧</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.playback.title">Playback</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item1">Play / Pause / Stop controls</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item2">Skip forward/back (15-90 sec configurable)</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item3">Next/Previous track navigation</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item4">Seek slider for any position</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item5">Speed: 1.0×-2.0× (0.1× steps)</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item6">Volume: 10%-100% (below system level)</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item7">Auto position save per file</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item8">Mini-player state restore (7 days)</span></li>
                        </ul>
                    </div>

                    <!-- Background Playback -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">🔊</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.background.title">Background Audio</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.background.item1">Playback with screen off</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.background.item2">Lock Screen controls</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.background.item3">Control Center integration</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.background.item4">Dynamic Island / Now Playing</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.background.item5">Smart interruption handling</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.background.item6">Auto-recovery after iOS audio reset</span></li>
                        </ul>
                    </div>

                    <!-- Timers -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">⏰</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.timers.title">Timers</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.timers.item1">Sleep timer: 5-90 minutes</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.timers.item2">Remaining time display</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.timers.item3">Auto-pause on timer</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.timers.item4">Daily auto-shutdown (HH:MM)</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.timers.item5">Scheduled pause at exact time</span></li>
                        </ul>
                    </div>

                    <!-- Library -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">📚</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.library.title">Library Management</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item1">Create books, import audio files</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item2">Formats: MP3, M4A, M4B, AAC, WAV, FLAC, OGG, OPUS</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item3">Edit metadata (title, author, narrator)</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item4">Custom covers from gallery/camera</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item5">Drag & drop reordering</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item6">Individual track covers & metadata</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item7">Favorites collection</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item8">Archive with preserved stats</span></li>
                        </ul>
                    </div>

                    <!-- Statistics -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">📊</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.statistics.title">Statistics</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.statistics.item1">Toggle tracking on/off</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.statistics.item2">Total listening time across all books</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.statistics.item3">Per-book completion percentage</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.statistics.item4">Per-file progress tracking</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.statistics.item5">Time in hours/minutes/seconds</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.statistics.item6">Preserved on archive</span></li>
                        </ul>
                    </div>

                    <!-- Personalization -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">🎨</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.personalization.title">Personalization</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.personalization.item1">Light / Dark / System theme</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.personalization.item2">7+ font choices + search</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.personalization.item3">Text scale 0.5×-2.0×</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.personalization.item4">Russian 🇷🇺 / English 🇺🇸 / System</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.personalization.item5">Portrait orientation lock</span></li>
                        </ul>
                    </div>

                    <!-- Accessibility -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">♿</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.accessibility.title">Accessibility</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.accessibility.item1">Full VoiceOver support</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.accessibility.item2">Dynamic Type scaling</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.accessibility.item3">Accessibility labels on all elements</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.accessibility.item4">Accessibility hints for actions</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.accessibility.item5">44×44pt minimum touch targets</span></li>
                        </ul>
                    </div>

                    <!-- Interface -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">📱</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.interface.title">Interface</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.interface.item1">iPhone optimized layout</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.interface.item2">iPad 2-column with sidebar</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.interface.item3">Landscape orientation support</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.interface.item4">Global mini-player on all screens</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.interface.item5">Waveform playback animation</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.interface.item6">Smooth transitions & spring animations</span></li>
                        </ul>
                    </div>

                    <!-- Technical -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">⚙️</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.technical.title">Technical</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.technical.item1">Background audio & processing</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.technical.item2">Health check every 30 sec</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.technical.item3">Auto-recovery after failures</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.technical.item4">Retry logic & error logging</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.technical.item5">Lazy loading & LRU cache</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.technical.item6">Throttled UI updates</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.technical.item7">Cloud sync (Beta)</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Planned Features -->
                <div class="mt-16 pt-12 border-t border-gray-200 dark:border-gray-700">
                    <div class="grid grid-cols-1 pb-8 text-center">
                        <span class="bg-amber-500/10 text-amber-600 dark:text-amber-400 text-xs font-bold px-2.5 py-0.5 rounded h-5 inline-block mx-auto mb-3" data-i18n="plannedFeatures.label">🚀 Coming Soon</span>
                        <h3 class="mb-4 md:text-2xl md:leading-normal text-xl leading-normal font-semibold" data-i18n="plannedFeatures.title">Planned Features</h3>
                        <p class="text-slate-400 max-w-xl mx-auto text-sm" data-i18n="plannedFeatures.description">Features in active development or planned for future releases. Sorted by implementation complexity.</p>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                        <!-- Easy -->
                        <div class="bg-gradient-to-br from-green-50 to-white dark:from-green-900/20 dark:to-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6 border border-green-100 dark:border-green-800/30">
                            <div class="flex items-center mb-4">
                                <div class="size-10 bg-green-500/20 text-green-600 dark:text-green-400 rounded-lg flex items-center justify-center text-sm font-bold me-3">1</div>
                                <div>
                                    <h4 class="text-base font-semibold" data-i18n="plannedFeatures.easy.title">Quick Wins</h4>
                                    <span class="text-xs text-green-600 dark:text-green-400" data-i18n="plannedFeatures.easy.label">Easy to implement</span>
                                </div>
                            </div>
                            <ul class="space-y-3 text-sm text-slate-500 dark:text-slate-400">
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-green-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.easy.item1.title">Pause at End of File</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.easy.item1.desc">Auto-stop after current track ends</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-green-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.easy.item2.title">Import/Export JSON</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.easy.item2.desc">Backup settings, playlists & progress</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-green-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.easy.item3.title">Series & Author Grouping</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.easy.item3.desc">Auto-organize books by metadata</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Medium -->
                        <div class="bg-gradient-to-br from-amber-50 to-white dark:from-amber-900/20 dark:to-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6 border border-amber-100 dark:border-amber-800/30">
                            <div class="flex items-center mb-4">
                                <div class="size-10 bg-amber-500/20 text-amber-600 dark:text-amber-400 rounded-lg flex items-center justify-center text-sm font-bold me-3">2</div>
                                <div>
                                    <h4 class="text-base font-semibold" data-i18n="plannedFeatures.medium.title">Audio Processing</h4>
                                    <span class="text-xs text-amber-600 dark:text-amber-400" data-i18n="plannedFeatures.medium.label">Medium complexity</span>
                                </div>
                            </div>
                            <ul class="space-y-3 text-sm text-slate-500 dark:text-slate-400">
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-amber-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.medium.item1.title">Silence Trimmer</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.medium.item1.desc">Auto-remove long pauses with configurable threshold</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-amber-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.medium.item2.title">Click & Pop Remover</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.medium.item2.desc">Intelligent noise suppression for vinyl digitizations</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-amber-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.medium.item3.title">CUE File Support</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.medium.item3.desc">Split single audio into chapters using CUE sheets</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-amber-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.medium.item4.title">Cloud Backup</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.medium.item4.desc">Auto-backup to Google Drive / iCloud</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Complex -->
                        <div class="bg-gradient-to-br from-purple-50 to-white dark:from-purple-900/20 dark:to-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6 border border-purple-100 dark:border-purple-800/30">
                            <div class="flex items-center mb-4">
                                <div class="size-10 bg-purple-500/20 text-purple-600 dark:text-purple-400 rounded-lg flex items-center justify-center text-sm font-bold me-3">3</div>
                                <div>
                                    <h4 class="text-base font-semibold" data-i18n="plannedFeatures.complex.title">Major Features</h4>
                                    <span class="text-xs text-purple-600 dark:text-purple-400" data-i18n="plannedFeatures.complex.label">Complex implementation</span>
                                </div>
                            </div>
                            <ul class="space-y-3 text-sm text-slate-500 dark:text-slate-400">
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-purple-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.complex.item1.title">Network Storage (NAS/SMB/UPnP)</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.complex.item1.desc">Stream from network folders without copying</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-purple-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.complex.item2.title">Cross-Device Sync</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.complex.item2.desc">Seamless progress sync between devices</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-purple-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.complex.item3.title">Local Web Server</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.complex.item3.desc">Manage library via browser on local network</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-purple-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.complex.item4.title">Desktop App</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.complex.item4.desc">Windows, macOS & Linux with unified UI</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center mt-8">
                        <p class="text-slate-400 text-sm" data-i18n="plannedFeatures.note">💬 Have a feature request? Submit it via in-app support!</p>
                    </div>
                </div>
            </div><!--end all-features container-->

            <div id="download" class="container relative md:mt-24 mt-16 z-2">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                    <div class="lg:col-span-5 md:col-span-6 mb-8 md:mb-0">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('landing/assets/images/app/new_book_ios.png') }}" class="rounded-3xl shadow-2xl" style="max-width: 190px;" alt="Voxi New Book">
                        </div>
                    </div>

                    <div class="lg:col-span-7 md:col-span-6">
                        <span class="bg-primary/5 text-primary text-xs font-bold px-2.5 py-0.5 rounded h-5" data-i18n="download.label">📱 Device Support</span>
                        <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4" data-i18n="download.title">Available for iPhone & iPad</h4>
                        <p class="text-slate-400 max-w-xl mb-0" data-i18n="download.description">iOS 16.0 or later. Optimized for all screen sizes with split view on iPad. Portrait and landscape support.</p>
                        
                        <div class="my-5">
                            <a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank"><img src="{{ asset('landing/assets/images/app/app.png') }}" class="m-1 inline-block" alt="Download on App Store"></a>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                            <div class="flex items-start">
                                <i data-feather="check-circle" class="text-primary size-5 me-2 mt-1"></i>
                                <div>
                                    <h6 class="text-sm font-medium" data-i18n="download.gettingStarted.title">Getting Started</h6>
                                    <p class="text-slate-400 text-xs" data-i18n="download.gettingStarted.description">Add audiobook → Import files → Start listening</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i data-feather="check-circle" class="text-primary size-5 me-2 mt-1"></i>
                                <div>
                                    <h6 class="text-sm font-medium" data-i18n="download.support.title">Support & Feedback</h6>
                                    <p class="text-slate-400 text-xs" data-i18n="download.support.description">In-app support system in Profile section</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end gird-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section-->

        <!-- What's New Section Start -->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="news">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <span class="bg-primary/5 text-primary text-xs font-bold px-2.5 py-0.5 rounded h-5 inline-block mx-auto mb-3" data-i18n="news.label">📰 Updates</span>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold" data-i18n="news.title">What's New</h3>
                    <p class="text-slate-400 max-w-xl mx-auto" data-i18n="news.description">Stay updated with the latest features and improvements</p>
                </div><!--end grid-->

                @if($articles->count() > 0)
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    @foreach($articles as $article)
                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-white dark:bg-slate-900">
                        <div class="content p-6">
                            <div class="flex items-center mb-4">
                                <span class="bg-primary/10 text-primary text-xs font-bold px-2.5 py-1 rounded">
                                    {{ $article['formatted_date'] }}
                                </span>
                            </div>
                            <a href="javascript:void(0)" class="title h5 text-lg font-medium hover:text-primary duration-500">{{ $article['title'] }}</a>
                            <p class="text-slate-400 mt-3 text-sm line-clamp-3">{!! $article['excerpt'] !!}</p>
                            
                            <div class="mt-4">
                                <button onclick="toggleNews({{ $article['id'] }})" class="text-primary hover:text-primary-700 text-sm font-medium inline-flex items-center" data-i18n="news.readMore">
                                    Read More <i class="uil uil-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Full article (hidden by default) -->
                        <div id="news-full-{{ $article['id'] }}" class="hidden p-6 pt-0 border-t border-gray-100 dark:border-gray-800">
                            <div class="prose prose-sm dark:prose-invert max-w-none text-slate-400">
                                {!! $article['text'] !!}
                            </div>
                            <button onclick="toggleNews({{ $article['id'] }})" class="mt-4 text-primary hover:text-primary-700 text-sm font-medium inline-flex items-center" data-i18n="news.showLess">
                                Show Less <i class="uil uil-arrow-up ms-1"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div><!--end grid-->
                @else
                <div class="text-center mt-8">
                    <div class="inline-flex items-center justify-center size-20 bg-primary/10 rounded-full mb-4">
                        <i class="uil uil-newspaper text-4xl text-primary"></i>
                    </div>
                    <p class="text-slate-400" data-i18n="news.noNews">No news yet. Stay tuned for updates!</p>
                </div>
                @endif
            </div><!--end container-->
        </section><!--end section-->
        <!-- What's New Section End -->

        <div class="relative">
            <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-slate-900">
                <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- Footer Start -->
        <footer class="relative bg-slate-900 dark:bg-slate-800 text-gray-200 dark:text-gray-200">    
            <div class="container relative">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="lg:col-span-4 md:col-span-12">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16" preserveAspectRatio="xMidYMid meet" viewBox="0 0 2048 2048">
                                            <path d="M 712.931 300.908 C 725.004 300.283 741.528 300.877 754.035 300.882 L 1259.56 300.874 C 1382.32 300.869 1473.8 308.15 1537.54 437.533 C 1561.49 486.13 1558.67 529.989 1558.61 581.609 L 1558.57 1479.06 C 1558.53 1550.09 1556.06 1601.77 1506.46 1659.83 C 1459.39 1714.94 1406.55 1738.53 1335.25 1744.95 L 788.387 1744.99 C 749.416 1745.02 709.062 1746.36 670.742 1738.83 C 568.395 1718.7 490.692 1625.81 490.314 1521.4 L 490.318 545.61 C 489.964 416.506 576.43 300.808 712.931 300.908 z M 894.6 493.49 C 739.558 493.218 685.402 517.814 687.368 683.748 C 687.59 702.514 710.026 711.481 722.875 697.198 C 739.211 679.039 701.444 600.764 765.568 552.858 C 804.019 524.132 854.277 532.975 899.234 532.972 L 1188.67 532.954 C 1204.13 532.913 1219.59 532.827 1235.04 532.553 C 1307.6 531.268 1322.14 594.502 1322.02 650.766 L 1322.04 1182.24 C 1322.06 1215.7 1322.62 1258.34 1274.82 1258.55 L 849.599 1258.37 C 801.259 1258.42 727.14 1276.13 726.522 1213.12 L 726.685 900.165 C 726.736 887.28 730.968 860.542 720.775 851.471 C 714.263 849.841 689.74 846.01 689.033 856.511 C 686.631 892.215 687.816 929.219 687.824 965.137 L 687.8 1383.53 C 687.545 1538.11 722.722 1558.31 877.428 1558.21 L 1177.03 1558.18 C 1206.51 1558.19 1244.92 1560.66 1272.84 1553.8 C 1352.12 1534.34 1360.9 1465.44 1360.87 1399.42 L 1360.84 663.978 C 1360.93 542.25 1327.89 493.375 1198.26 493.453 L 894.6 493.49 z M 1043.76 1170.27 C 1155.73 1159.13 1237.48 1059.34 1226.34 947.366 C 1215.19 835.397 1115.39 753.661 1003.42 764.81 C 891.464 775.958 809.739 875.75 820.879 987.708 C 832.018 1099.67 931.804 1181.4 1043.76 1170.27 z M 1126.12 648 C 1137.07 644.237 1137.6 641.352 1140.79 630.793 C 1138.69 625.632 1136.56 618.549 1131.13 616.026 C 1122.03 611.794 951.516 613.794 926.94 613.896 C 903.542 618.172 902.926 646.961 933.528 647.627 C 992.977 648.923 1067.31 651.156 1126.12 648 z M 707.348 810.908 C 712.518 810.53 719.519 810.731 723.079 806.946 C 729.198 789.483 735.795 745.207 707.348 743.333 C 687.702 745.574 685.293 752.383 687.03 772.554 C 689.031 795.782 679.58 808.566 707.348 810.908 z" fill="white"></path>
                                            <path d="M 1013.31 1320.53 C 1061.82 1314.04 1106.44 1348.01 1113.11 1396.5 C 1119.77 1444.98 1085.96 1489.73 1037.5 1496.57 C 988.791 1503.44 943.768 1469.42 937.07 1420.69 C 930.372 1371.95 964.55 1327.05 1013.31 1320.53 z M 1033.41 1452.99 C 1058.12 1448.47 1074.41 1424.69 1069.69 1400.02 C 1064.97 1375.35 1041.05 1359.25 1016.42 1364.17 C 992.07 1369.03 976.193 1392.62 980.858 1417.01 C 985.522 1441.4 1008.98 1457.46 1033.41 1452.99 z" fill="rgba(255,255,255,0.7)"></path>
                                            <path d="M 1007.56 806.058 C 1020.3 805.461 1035.62 806.285 1048.95 806.058 L 1048.95 942.897 C 1010.94 928.185 969.136 946.663 967.679 989.51 C 965.916 1041.37 1033.66 1067.63 1068.52 1030.15 C 1093.29 1003.51 1086.48 968.276 1086.49 934.342 L 1086.47 819.614 C 1146.43 835.352 1187.98 905.547 1190.28 965.019 C 1187.12 1122.89 996.475 1186.05 893.941 1069.03 C 806.8 969.584 876.766 821.394 1007.56 806.058 z" fill="rgba(255,255,255,0.7)"></path>
                                        </svg>
                                    </a>
                                    <p class="mt-6 text-gray-300" data-i18n="footer.description">Your personal audiobook library with powerful statistics. Track every moment, never lose progress. Built for everyone, enhanced by community.</p>
                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 dark:border-gray-700 text-gray-400 hover:text-white rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-apple align-middle" title="App Store"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                        
                                <div class="lg:col-span-2 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold" data-i18n="footer.app.title">App</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="#features" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="nav.features">Features</span></a></li>
                                        <li class="mt-[10px]"><a href="#about" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="nav.statistics">Statistics</span></a></li>
                                        <li class="mt-[10px]"><a href="#testimonials" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="nav.whyVoxi">Why Voxi</span></a></li>
                                        <li class="mt-[10px]"><a href="#all-features" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="nav.allFeatures">All Features</span></a></li>
                                        <li class="mt-[10px]"><a href="#download" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="nav.download">Download</span></a></li>
                                        <li class="mt-[10px]"><a href="#news" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="nav.news">News</span></a></li>
                                    </ul>
                                </div><!--end col-->
                        
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold" data-i18n="footer.legal.title">Legal & Support</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="{{ route('ios.terms') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="footer.legal.terms">Terms of Service</span></a></li>
                                        <li class="mt-[10px]"><a href="{{ route('ios.privacy') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="footer.legal.privacy">Privacy Policy</span></a></li>
                                        <li class="mt-[10px]"><a href="{{ route('ios.support') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> <span data-i18n="nav.support">Support</span></a></li>
                                        <li class="mt-[10px]"><a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> App Store</a></li>
                                    </ul>
                                </div><!--end col-->

                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold" data-i18n="footer.support.title">🆘 Support</h5>
                                    <p class="mt-6 text-gray-300" data-i18n="footer.support.description">We're here to help. Submit tickets directly in the Profile section of the app.</p>
                                    <ul class="list-none mt-4">
                                        <li class="mb-2 flex items-center text-gray-300"><i class="uil uil-check-circle text-primary me-2"></i> <span data-i18n="footer.support.item1">In-app support system</span></li>
                                        <li class="mb-2 flex items-center text-gray-300"><i class="uil uil-check-circle text-primary me-2"></i> <span data-i18n="footer.support.item2">Direct team communication</span></li>
                                        <li class="mb-2 flex items-center text-gray-300"><i class="uil uil-check-circle text-primary me-2"></i> <span data-i18n="footer.support.item3">Feature request submission</span></li>
                                    </ul>
                                    <a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank" class="py-2 px-5 mt-4 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" data-i18n="footer.support.downloadBtn">Download App</a>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div><!--end col-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
                <div class="container relative text-center">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="md:text-start text-center">
                            <p class="mb-0 text-gray-100">© {{ date('Y') }} Voxi Book Player. <span data-i18n="footer.copyright">All Rights Reserved.</span></p>
                        </div>

                        <div class="md:text-end text-center mt-6 md:mt-0">
                            <span class="text-gray-400 text-sm" data-i18n="footer.tagline">iOS 16.0+ • iPhone • iPad • Made with ❤️ for audiobook lovers</span>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-primary text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

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
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('landing/assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('landing/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('landing/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('landing/assets/js/app.js') }}"></script>
        <script src="{{ asset('landing/assets/js/i18n.js') }}"></script>
        <script>
            // Toggle news article content
            function toggleNews(id) {
                const fullContent = document.getElementById('news-full-' + id);
                if (fullContent) {
                    fullContent.classList.toggle('hidden');
                }
            }

            // Toggle features detail view (mobile only)
            function toggleFeaturesDetail() {
                const compactView = document.getElementById('features-compact');
                const fullView = document.getElementById('features-full');
                const toggleBtn = document.getElementById('features-toggle-btn');
                const toggleIcon = document.getElementById('features-toggle-icon');
                
                if (fullView && compactView && toggleBtn) {
                    const isExpanded = fullView.classList.contains('grid');
                    
                    if (isExpanded) {
                        // Collapse
                        fullView.classList.remove('grid');
                        fullView.classList.add('hidden');
                        compactView.classList.remove('hidden');
                        toggleIcon.classList.remove('uil-angle-up');
                        toggleIcon.classList.add('uil-angle-down');
                        toggleBtn.querySelector('span').setAttribute('data-i18n', 'allFeatures.showDetails');
                        toggleBtn.querySelector('span').textContent = getSavedLanguage() === 'ru' ? 'Показать подробности' : 'Show all details';
                    } else {
                        // Expand
                        fullView.classList.remove('hidden');
                        fullView.classList.add('grid');
                        compactView.classList.add('hidden');
                        toggleIcon.classList.remove('uil-angle-down');
                        toggleIcon.classList.add('uil-angle-up');
                        toggleBtn.querySelector('span').setAttribute('data-i18n', 'allFeatures.hideDetails');
                        toggleBtn.querySelector('span').textContent = getSavedLanguage() === 'ru' ? 'Свернуть' : 'Hide details';
                    }
                }
            }
            
            // Helper to get saved language
            function getSavedLanguage() {
                return localStorage.getItem('voxi_lang') || 'en';
            }
        </script>
        <!-- JAVASCRIPTS -->
    </body>
</html>

