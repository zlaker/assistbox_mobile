<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name', 'Mobile App') }} - Landing</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mobile Application Landing Page">
        <meta name="keywords" content="mobile, application, app, landing, ios, android">
        <meta name="author" content="{{ config('app.name') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('landing/assets/images/favicon.ico') }}">

        <!-- Css -->
        <link href="{{ asset('landing/assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('landing/assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('landing/assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('landing/assets/css/tailwind.css') }}">

    </head>
    
    <body class="font-nunito text-base text-slate-900 dark:text-white dark:bg-slate-900">
        
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container relative">
                <!-- Logo container-->
                <a class="logo" href="{{ route('home') }}">
                    <span class="inline-block dark:hidden">
                        <img src="{{ asset('landing/assets/images/logo-dark.png') }}" class="l-dark" height="24" alt="">
                        <img src="{{ asset('landing/assets/images/logo-light.png') }}" class="l-light" height="24" alt="">
                    </span>
                    <img src="{{ asset('landing/assets/images/logo-light.png') }}" height="24" class="hidden dark:inline-block" alt="">
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

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline mb-0">
                        <a href="">
                            <span class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-primary/5 hover:bg-primary border border-primary/10 hover:border-primary text-primary hover:text-white"><i data-feather="settings" class="size-4"></i></span></span>
                            <span class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide border border-gray-50 align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700"><i data-feather="settings" class="size-4"></i></span></span>
                        </a>
                    </li>
            
                    <li class="inline ps-1 mb-0">
                        <a href="#">
                            <div class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-primary hover:bg-primary-700 border border-primary hover:border-primary-700 text-white"><i data-feather="shopping-cart" class="size-4"></i></span></div>
                            <div class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide border border-gray-50 align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-800 dark:hover:border-gray-700"><i data-feather="shopping-cart" class="size-4"></i></span></div>
                        </a>
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-light">
                        <li><a href="{{ route('home') }}" class="sub-menu-item">Home</a></li>
                        <li><a href="#features" class="sub-menu-item">Features</a></li>
                        <li><a href="#about" class="sub-menu-item">About</a></li>
                        <li><a href="#testimonials" class="sub-menu-item">Testimonials</a></li>
                        <li><a href="#download" class="sub-menu-item">Download</a></li>
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
                            <h4 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Make Faster, <br> More Confident <br> Decision</h4>
                            <p class="text-white/70 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v4.x html page.</p>
                        
                            <div class="mt-6">
                                <a href=""><img src="{{ asset('landing/assets/images/app/app.png') }}" class="inline-block m-1" alt=""></a>
                                <a href=""><img src="{{ asset('landing/assets/images/app/playstore.png') }}" class="inline-block m-1" alt=""></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-4 md:col-span-5 md:mt-0">
                        <div class="relative after:content-[''] after:absolute after:h-40 after:w-40 after:bg-primary after:bottom-0 after:end-0  after:-z-0 after:rounded-3xl after:animate-[spin_10s_linear_infinite]">
                            <img src="{{ asset('landing/assets/images/app/1.png') }}" class="relative z-1" alt="">
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
                    <h6 class="text-primary text-sm font-bold uppercase mb-2">Features</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What We Do ?</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
                    <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500">
                        <div
                            class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-presentation-line"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-primary">Design & Branding</a>
                            <p class="text-slate-400 mt-3">The most well-known which is said to have originated</p>

                            <div class="mt-5">
                                <a href=""
                                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end feature content-->

                    <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500">
                        <div
                            class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-bill"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-primary">Fully Secured</a>
                            <p class="text-slate-400 mt-3">The most well-known which is said to have originated</p>

                            <div class="mt-5">
                                <a href=""
                                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end feature content-->

                    <div class="group p-6 md:px-4 rounded-lg shadow-sm dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 bg-white dark:bg-slate-900 text-center duration-500">
                        <div
                            class="size-16 bg-primary/5 text-primary rounded-lg text-2xl flex align-middle justify-center items-center shadow-xs dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-money-withdrawal"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-primary">High Performance</a>
                            <p class="text-slate-400 mt-3">The most well-known which is said to have originated</p>

                            <div class="mt-5">
                                <a href=""
                                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Read
                                    More <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end feature content-->
                </div>
            </div><!--end container-->

            <div id="about" class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
                    <div class="relative">
                        <img src="{{ asset('landing/assets/images/app/classic01.png') }}" class="mx-auto" alt="">
                        <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-2/4 translate-y-2/4 start-0 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
                    </div>

                    <div class="lg:ms-8">
                        <h4 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">We Build High Performing <br> Application</h4>
                        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Create your own skin to match your brand</li>
                        </ul>

                        <div class="mt-4">
                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    <div class="relative order-1 md:order-2">
                        <img src="{{ asset('landing/assets/images/app/classic02.png') }}" class="mx-auto" alt="">
                        <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-2/4 translate-y-2/4 end-0 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
                    </div>

                    <div class="lg:me-8 order-2 md:order-1">
                        <h4 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">Easy And Best Solution <br> For Your App</h4>
                        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Create your own skin to match your brand</li>
                        </ul>

                        <div class="mt-4">
                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
                    <div class="relative">
                        <img src="{{ asset('landing/assets/images/app/classic04.png') }}" class="mx-auto" alt="">
                        <div class="overflow-hidden absolute lg:size-[400px] size-[320px] bg-primary/5 bottom-2/4 translate-y-2/4 start-0 rotate-45 -z-1 shadow-md shadow-primary/10 rounded-[100px]"></div>
                    </div>

                    <div class="lg:ms-8">
                        <h4 class="mb-4 md:text-3xl text-2xl lg:leading-normal leading-normal font-medium">Beautiful, Simple & <br> Easy to Use</h4>
                        <p class="text-slate-400">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters visual impact.</p>
                        <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-primary text-xl me-2"></i> Create your own skin to match your brand</li>
                        </ul>

                        <div class="mt-4">
                            <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Find Out More <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Key Features</h3>
                    <p class="text-slate-400 max-w-xl mx-auto">Create, collaborate, and turn your ideas into incredible products with the definitive platform for digital design.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-center">
                    <div class="lg:col-span-4 md:col-span-6 lg:order-1 order-2">
                        <div class="grid grid-cols-1 gap-[30px]">
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="monitor" class="size-5"></i>
                                </div>
                                <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                                    <h4 class="mb-0 text-lg font-medium">Use On Any Device</h4>
                                    <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                                </div>
                            </div>
                            <!--end feature-->
                            
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="feather" class="size-5"></i>
                                </div>
                                <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                                    <h4 class="mb-0 text-lg font-medium">Feather Icons</h4>
                                    <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                                </div>
                            </div>
                            <!--end feature-->
                            
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex md:order-2 order-1 align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="eye" class="size-5"></i>
                                </div>
                                <div class="flex-1 md:order-1 order-2 md:text-end md:me-4 md:ms-0 ms-4">
                                    <h4 class="mb-0 text-lg font-medium">Retina Ready</h4>
                                    <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                    </div>

                    <div class="lg:col-span-4 md:col-span-12 lg:mx-8 lg:order-2 order-1">
                        <img src="{{ asset('landing/assets/images/feature.png') }}" class="mx-auto md:max-w-[300px]" alt="">
                    </div>

                    <div class="lg:col-span-4 md:col-span-6 order-3">
                        <div class="grid grid-cols-1 gap-[30px]">
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="user-check" class="size-5"></i>
                                </div>
                                <div class="flex-1 ms-4">
                                    <h4 class="mb-0 text-lg font-medium">W3c Valid Code</h4>
                                    <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                                </div>
                            </div>
                            <!--end feature-->
                            
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="smartphone" class="size-5"></i>
                                </div>
                                <div class="flex-1 ms-4">
                                    <h4 class="mb-0 text-lg font-medium">Fully Responsive</h4>
                                    <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                                </div>
                            </div>
                            <!--end feature-->
                            
                            <div class="group flex duration-500 xl:p-3">
                                <div class="flex align-middle justify-center items-center size-14 mt-1 bg-primary/5 group-hover:bg-primary group-hover:text-white text-primary rounded-full text-2xl shadow-xs dark:shadow-gray-800 duration-500">
                                    <i data-feather="heart" class="size-5"></i>
                                </div>
                                <div class="flex-1 ms-4">
                                    <h4 class="mb-0 text-lg font-medium">Browser Compatibility</h4>
                                    <p class="text-slate-400 mt-3">One disadvantage of Lorum Ipsum is that in Latin frequently than others</p>
                                </div>
                            </div>
                            <!--end feature-->
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div id="testimonials" class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-primary text-base mb-2">Testimonial</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-8">
                    <div class="tiny-three-item">
                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow-sm dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-primary"></i>
                                    <p class="text-slate-400">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="{{ asset('landing/assets/images/client/01.jpg') }}" class="size-14 rounded-full shadow-md mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow-sm dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-primary"></i>
                                    <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="{{ asset('landing/assets/images/client/02.jpg') }}" class="size-14 rounded-full shadow-md mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow-sm dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-primary"></i>
                                    <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="{{ asset('landing/assets/images/client/03.jpg') }}" class="size-14 rounded-full shadow-md mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow-sm dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-primary"></i>
                                    <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="{{ asset('landing/assets/images/client/04.jpg') }}" class="size-14 rounded-full shadow-md mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow-sm dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-primary"></i>
                                    <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="{{ asset('landing/assets/images/client/05.jpg') }}" class="size-14 rounded-full shadow-md mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow-sm dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-primary"></i>
                                    <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="{{ asset('landing/assets/images/client/06.jpg') }}" class="size-14 rounded-full shadow-md mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div id="download" class="container relative md:mt-24 mt-16 z-2">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                    <div class="lg:col-span-5 md:col-span-6">
                        <img src="{{ asset('landing/assets/images/illustrator/envelope.svg') }}" class="mx-auto d-block" alt="">
                    </div>

                    <div class="lg:col-span-7 md:col-span-6">
                        <span class="bg-primary/5 text-primary text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile Apps</span>
                        <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your <br> Smartphones</h4>
                        <p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        <div class="my-5">
                            <a href=""><img src="{{ asset('landing/assets/images/app/app.png') }}" class="m-1 inline-block" alt=""></a>

                            <a href=""><img src="{{ asset('landing/assets/images/app/playstore.png') }}" class="m-1 inline-block" alt=""></a>
                        </div>

                        <div class="inline-block">
                            <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-800">
                                <i data-feather="smartphone" class="me-2 text-primary size-10"></i>
                                <div class="content">
                                    <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                                    <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-primary hover:text-primary after:bg-primary duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end gird-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="relative">
            <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-slate-900">
                <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Section-->

        <!-- Footer Start -->
        <footer class="relative bg-slate-900 dark:bg-slate-800 text-gray-200 dark:text-gray-200">    
            <div class="container relative">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="lg:col-span-4 md:col-span-12">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <img src="{{ asset('landing/assets/images/logo-light.png') }}" alt="">
                                    </a>
                                    <p class="mt-6 text-gray-300">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 dark:border-gray-700 text-gray-400 hover:text-white rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                        <li class="inline"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 dark:border-gray-700 text-gray-400 hover:text-white rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                        <li class="inline"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 dark:border-gray-700 text-gray-400 hover:text-white rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                        <li class="inline"><a href="#" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border border-gray-800 dark:border-gray-700 text-gray-400 hover:text-white rounded-md hover:border-primary dark:hover:border-primary hover:bg-primary dark:hover:bg-primary"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                                    </ul><!--end icon-->
                                </div><!--end col-->
                        
                                <div class="lg:col-span-2 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="#about" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> About us</a></li>
                                        <li class="mt-[10px]"><a href="#features" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Features</a></li>
                                        <li class="mt-[10px]"><a href="#testimonials" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Testimonials</a></li>
                                        <li class="mt-[10px]"><a href="#download" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Download</a></li>
                                    </ul>
                                </div><!--end col-->
                        
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Useful Links</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="{{ route('ios.terms') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Terms of Services</a></li>
                                        <li class="mt-[10px]"><a href="{{ route('ios.privacy') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Privacy Policy</a></li>
                                        <li class="mt-[10px]"><a href="{{ route('ios.support') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Support</a></li>
                                    </ul>
                                </div><!--end col-->

                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                                    <p class="mt-6 text-gray-300">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="grid grid-cols-1">
                                            <div class="my-3">
                                                <label class="form-label text-gray-300">Write your email <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="size-4 absolute top-3 start-4 text-gray-100"></i>
                                                    <input type="email" class="form-input ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 dark:bg-gray-700 border-0 text-gray-100 focus:shadow-none focus:ring-0 placeholder:text-gray-200 outline-none" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        
                                            <button type="submit" id="submitsubscribe" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md">Subscribe</button>
                                        </div>
                                    </form>
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
                            <p class="mb-0 text-gray-100">© {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
                        </div>

                        <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                            <li class="inline"><a href=""><img src="{{ asset('landing/assets/images/payments/american-ex.png') }}" class="max-h-6 inline" title="American Express" alt=""></a></li>
                            <li class="inline"><a href=""><img src="{{ asset('landing/assets/images/payments/discover.png') }}" class="max-h-6 inline" title="Discover" alt=""></a></li>
                            <li class="inline"><a href=""><img src="{{ asset('landing/assets/images/payments/master-card.png') }}" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                            <li class="inline"><a href=""><img src="{{ asset('landing/assets/images/payments/paypal.png') }}" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                            <li class="inline"><a href=""><img src="{{ asset('landing/assets/images/payments/visa.png') }}" class="max-h-6 inline" title="Visa" alt=""></a></li>
                        </ul>
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
        <!-- JAVASCRIPTS -->
    </body>
</html>

