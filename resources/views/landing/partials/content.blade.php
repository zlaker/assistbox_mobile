        <!-- Start Hero -->
        <section class="relative table w-full pt-24 pb-36 md:pt-32 md:pb-0 overflow-hidden bg-[url('/landing/assets/images/app/bg.png')] bg-top bg-no-repeat bg-cover md:bg-fixed">
            <div class="absolute inset-0 bg-primary opacity-80"></div>
            <div class="container relative z-2">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-8 md:col-span-7 md:mb-16">
                        <div class="md:me-6">
                            <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5" data-i18n="hero.title">Voxi Book Player</h1>
                            <p class="text-white/90 text-xl font-medium mb-3" data-i18n="hero.subtitle">Audiobook Player & Statistics</p>
                            <p class="text-white/70 text-lg max-w-xl" data-i18n="hero.description">Your personal audiobook library with powerful statistics. Track every moment, never lose progress. Built for everyone, enhanced by community.</p>
                        
                            <div class="mt-6">
                                <a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank" rel="noopener noreferrer" aria-label="Download on the App Store"><img src="{{ asset('landing/assets/images/app/app.png') }}" class="inline-block m-1" alt="Download on App Store"></a>
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

        <!-- Welcome / Developer Note -->
        <section id="welcome" class="relative py-12 md:py-16 bg-slate-50 dark:bg-slate-800/50">
            <div class="container relative max-w-3xl">
                <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-sm dark:shadow-gray-800 p-6 md:p-8 space-y-4 border border-slate-100 dark:border-slate-700">
                    <p class="text-lg font-medium text-slate-800 dark:text-slate-100" data-i18n="welcome.greeting">Hello, dear visitor!</p>
                    <p class="text-slate-600 dark:text-slate-400" data-i18n="welcome.intro">We're excited to introduce you to our new project.</p>
                    <p class="text-slate-600 dark:text-slate-400" data-i18n="welcome.story">Voxi Book Player was born from a personal need. When I switched from Android to Apple, I found myself missing certain audiobook features that I had grown to love. Instead of compromising, I decided to build the player I always wanted.</p>
                    <p class="text-slate-600 dark:text-slate-400" data-i18n="welcome.humble">Please be kind — this is a passion project still in its early stages. I'm actively developing and improving it every day. Even having just one user who finds this app useful would make all the effort worthwhile.</p>
                    <p class="text-slate-600 dark:text-slate-400" data-i18n="welcome.participate">You can be part of this journey! If there's a feature you're missing or something that would make your listening experience better, let me know — I'll do my best to make it happen.</p>
                    <p class="text-slate-600 dark:text-slate-400" data-i18n="welcome.thanks">Thank you for stopping by. I hope Voxi becomes a trusted companion for your audiobook adventures.</p>
                    <p class="text-slate-700 dark:text-slate-300 font-medium text-right italic pt-2" data-i18n="welcome.signature">— The Developer</p>
                </div>
            </div>
        </section>

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
                                    <p class="text-slate-400 mt-3" data-i18n="keyFeatures.privacyFirst.description">Local-first library, optional iCloud sync, no ads or tracking</p>
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
                    <p class="text-primary text-sm font-medium mt-2" data-i18n="allFeatures.versionNote">Version 3.1.0</p>
                    <div class="flex flex-wrap items-center justify-center gap-2 mt-4">
                        <span class="inline-flex items-center gap-1.5 bg-primary/10 text-primary px-3 py-1.5 rounded-full text-sm font-semibold">
                            <span data-i18n="allFeatures.featureCount">67</span>
                            <span data-i18n="allFeatures.totalFeatures">features total</span>
                        </span>
                        <span class="inline-flex items-center bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 px-3 py-1.5 rounded-full text-xs font-medium">
                            <span data-i18n="allFeatures.categoriesLabel">12 categories</span>
                        </span>
                    </div>
                </div>

                <!-- Full feature grid -->
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
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item5">Speed: 0.5×–2.0× (0.1× steps, per-book memory)</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item6">Volume: 10%-100% (below system level)</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item7">Auto position save per file</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item8">Bookmarks, shuffle, Smart Shuffle track map</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.playback.item9">Mini-player restore, rewind on resume, voice boost EQ</span></li>
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
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item7">Collections, series, sort & progress filters</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.library.item8">Wi‑Fi Transfer, OPDS catalogs, archive with stats</span></li>
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
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.statistics.item6">Listening streak & dedicated stats screen</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.statistics.item7">Preserved on archive, reset per book</span></li>
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
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.technical.item7">Diagnostics and performance monitoring</span></li>
                        </ul>
                    </div>

                    <!-- Chapters & Navigation -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">📑</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.chapters.title">Chapters & Navigation</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.chapters.item1">CUE file chapter navigation</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.chapters.item2">Embedded M4B/M4A chapter extraction</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.chapters.item3">Favorite fragments collection</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.chapters.item4">Playing book indicator in library</span></li>
                        </ul>
                    </div>

                    <!-- iCloud -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">☁️</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.icloud.title">iCloud</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.icloud.item1">Store audiobooks in iCloud Drive</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.icloud.item2">Download on demand when playing</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.icloud.item3">Download for offline listening</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.icloud.item4">Automatic cache management</span></li>
                        </ul>
                    </div>

                    <!-- Sync & Discover -->
                    <div class="bg-white dark:bg-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6">
                        <div class="flex items-center mb-4">
                            <div class="size-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center text-xl me-3">🔗</div>
                            <h4 class="text-lg font-semibold" data-i18n="allFeatures.discover.title">Sync & Discover</h4>
                        </div>
                        <ul class="space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.discover.item1">iCloud sync: progress, settings, statistics</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.discover.item2">Continue Listening widget + deep link</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.discover.item3">Siri Shortcuts & in-app news</span></li>
                            <li class="flex items-start"><i class="uil uil-check text-primary me-2 mt-0.5"></i><span data-i18n="allFeatures.discover.item4">Onboarding & CarPlay (beta)</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Planned Features -->
                <div class="mt-16 pt-12 border-t border-gray-200 dark:border-gray-700">
                    <div class="grid grid-cols-1 pb-8 text-center">
                        <span class="bg-amber-500/10 text-amber-600 dark:text-amber-400 text-xs font-bold px-2.5 py-0.5 rounded h-5 inline-block mx-auto mb-3" data-i18n="plannedFeatures.label">🚀 On the Roadmap</span>
                        <h3 class="mb-4 md:text-2xl md:leading-normal text-xl leading-normal font-semibold" data-i18n="plannedFeatures.title">Planned Features</h3>
                        <p class="text-slate-400 max-w-xl mx-auto text-sm" data-i18n="plannedFeatures.description">Version 3.1.0 ships 67 features today. Here is what we are exploring next.</p>
                    </div>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                        <!-- Easy -->
                        <div class="bg-gradient-to-br from-green-50 to-white dark:from-green-900/20 dark:to-slate-900 rounded-lg shadow-sm dark:shadow-gray-800 p-6 border border-green-100 dark:border-green-800/30">
                            <div class="flex items-center mb-4">
                                <div class="size-10 bg-green-500/20 text-green-600 dark:text-green-400 rounded-lg flex items-center justify-center text-sm font-bold me-3">1</div>
                                <div>
                                    <h4 class="text-base font-semibold" data-i18n="plannedFeatures.easy.title">Quality of Life</h4>
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
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.easy.item2.desc">Backup settings, collections, and progress</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-green-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.easy.item3.title">More Languages</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.easy.item3.desc">Expand beyond English and Russian</p>
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
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.medium.item3.title">Full Library Backup</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.medium.item3.desc">Export entire library metadata and progress bundles</p>
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
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.complex.item2.title">Cross-Platform Sync</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.complex.item2.desc">Sync library and progress beyond Apple devices</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="uil uil-clock text-purple-500 me-2 mt-0.5"></i>
                                    <div>
                                        <span class="font-medium text-slate-700 dark:text-slate-300" data-i18n="plannedFeatures.complex.item3.title">Desktop App</span>
                                        <p class="text-xs mt-0.5" data-i18n="plannedFeatures.complex.item3.desc">Windows, macOS & Linux with unified UI</p>
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
                        <p class="text-slate-400 max-w-xl mb-0" data-i18n="download.description">iOS 26.1 or later. Optimized for iPhone and iPad with split view, widget, Siri Shortcuts, and optional iCloud sync.</p>
                        
                        <div class="my-5">
                            <a href="https://apps.apple.com/us/app/voxi-book-player/id6756003204" target="_blank" rel="noopener noreferrer" aria-label="Download on the App Store"><img src="{{ asset('landing/assets/images/app/app.png') }}" class="m-1 inline-block" alt="Download on App Store"></a>
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
                    <article class="blog news-card relative rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-white dark:bg-slate-900" id="news-card-{{ $article['id'] }}" aria-expanded="false">
                        <div class="content p-6">
                            <div class="flex items-center mb-4">
                                <span class="bg-primary/10 text-primary text-xs font-bold px-2.5 py-1 rounded">
                                    {{ $article['formatted_date'] }}
                                </span>
                            </div>
                            <h4 class="title text-lg font-medium text-slate-900 dark:text-white">{{ $article['title'] }}</h4>
                            <p class="text-slate-400 mt-3 text-sm line-clamp-3 news-excerpt">{!! $article['excerpt'] !!}</p>
                            
                            <div class="mt-4 news-read-more">
                                <button type="button" onclick="toggleNews({{ $article['id'] }})" class="text-primary hover:text-primary-700 text-sm font-medium inline-flex items-center" aria-expanded="false" aria-controls="news-full-{{ $article['id'] }}">
                                    <span data-i18n="news.readMore">Read More</span>
                                    <i class="uil uil-arrow-right ms-1" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div id="news-full-{{ $article['id'] }}" class="hidden p-6 pt-0 border-t border-gray-100 dark:border-gray-800" role="region" aria-label="{{ $article['title'] }}">
                            <div class="article-prose">
                                {!! $article['text'] !!}
                            </div>
                            <button type="button" onclick="toggleNews({{ $article['id'] }})" class="mt-4 text-primary hover:text-primary-700 text-sm font-medium inline-flex items-center" aria-expanded="true" aria-controls="news-full-{{ $article['id'] }}">
                                <span data-i18n="news.showLess">Show Less</span>
                                <i class="uil uil-arrow-up ms-1" aria-hidden="true"></i>
                            </button>
                        </div>
                    </article>
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
