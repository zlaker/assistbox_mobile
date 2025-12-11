<x-landing.layout 
    title="Support & Help Center — Voxi Book Player" 
    description="Get help with Voxi Book Player audiobook app. FAQ, quick start guide, troubleshooting and contact support for iPhone & iPad."
    keywords="voxi support, audiobook player help, voxi book player faq, ios audiobook support, audiobook app help"
    :noindex="false"
    page="support"
>
    <!-- Page Header -->
    <section class="relative table w-full py-32 lg:py-40 bg-gradient-to-br from-slate-900 via-slate-800 to-primary/20">
        <div class="container relative">
            <div class="grid grid-cols-1 text-center mt-10">
                <h1 class="text-3xl leading-normal font-semibold text-white" data-i18n-heading data-i18n="supportPage.heading">Support & Help Center</h1>
                <p class="text-slate-400 mt-2" data-i18n-subtitle data-i18n="supportPage.subtitle">Having trouble or have a question? We're here to help!</p>
            </div>
        </div>
    </section>
    
    <div class="relative">
        <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <!-- Content -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="md:flex justify-center">
                <div class="lg:w-3/4 md:w-full">
                    
                    <!-- FAQ Section -->
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md mb-6">
                        <h2 class="text-xl font-semibold mb-6 flex items-center">
                            <span class="me-2">🔍</span> <span data-i18n="supportPage.faq.title">Frequently Asked Questions (FAQ)</span>
                        </h2>
                        
                        <div class="space-y-6">
                            <div>
                                <p class="font-medium text-slate-700 dark:text-slate-300 mb-2" data-i18n="supportPage.faq.q1.question">Q: How do I add my audiobooks to the app?</p>
                                <p class="text-slate-400" data-i18n="supportPage.faq.q1.answer">A: Voxi Book Player works with your existing audio files. You can add books via iTunes File Sharing (iOS), direct file import from cloud services (Dropbox, Google Drive), or simply by placing files in the "VoxiBooks" folder on your device.</p>
                            </div>
                            
                            <div>
                                <p class="font-medium text-slate-700 dark:text-slate-300 mb-2" data-i18n="supportPage.faq.q2.question">Q: Does the app sync my progress between devices?</p>
                                <p class="text-slate-400" data-i18n="supportPage.faq.q2.answer">A: Currently, listening progress and settings are stored locally on your device. If you have opted-in within the app's settings, this data is saved in a local archive. Cloud sync between different devices is not yet available.</p>
                            </div>
                            
                            <div>
                                <p class="font-medium text-slate-700 dark:text-slate-300 mb-2" data-i18n="supportPage.faq.q3.question">Q: I enabled notifications but don't receive updates. Why?</p>
                                <p class="text-slate-400" data-i18n="supportPage.faq.q3.answer">A: First, please ensure notifications are enabled both in the app's settings and in your device's System Settings. The app uses a device identifier to send news about major updates.</p>
                            </div>
                            
                            <div>
                                <p class="font-medium text-slate-700 dark:text-slate-300 mb-2" data-i18n="supportPage.faq.q4.question">Q: How can I delete my local listening history?</p>
                                <p class="text-slate-400" data-i18n="supportPage.faq.q4.answer">A: You can clear your listening archive at any time. Go to App Settings → Privacy & Data → Clear Listening History. Alternatively, uninstalling the app will remove all local data.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Start Guide -->
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md mb-6">
                        <h2 class="text-xl font-semibold mb-6 flex items-center">
                            <span class="me-2">📖</span> <span data-i18n="supportPage.quickStart.title">Quick Start Guide</span>
                        </h2>
                        
                        <ul class="space-y-4 text-slate-400">
                            <li class="flex">
                                <i class="uil uil-check-circle text-primary me-2 mt-1"></i>
                                <span><strong class="text-slate-700 dark:text-slate-300" data-i18n="supportPage.quickStart.item1.title">Importing Books:</strong> <span data-i18n="supportPage.quickStart.item1.desc">Use the '+' button in the 'My Library' section to import files from your device or cloud storage.</span></span>
                            </li>
                            <li class="flex">
                                <i class="uil uil-check-circle text-primary me-2 mt-1"></i>
                                <span><strong class="text-slate-700 dark:text-slate-300" data-i18n="supportPage.quickStart.item2.title">Managing Playback:</strong> <span data-i18n="supportPage.quickStart.item2.desc">Use the player screen to control speed, set a sleep timer, or bookmark a moment.</span></span>
                            </li>
                            <li class="flex">
                                <i class="uil uil-check-circle text-primary me-2 mt-1"></i>
                                <span><strong class="text-slate-700 dark:text-slate-300" data-i18n="supportPage.quickStart.item3.title">Organizing:</strong> <span data-i18n="supportPage.quickStart.item3.desc">Create custom playlists or use filters to sort your library by author, progress, or duration.</span></span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Support -->
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md mb-6">
                        <h2 class="text-xl font-semibold mb-6 flex items-center">
                            <span class="me-2">📧</span> <span data-i18n="supportPage.contact.title">Contact Support</span>
                        </h2>
                        
                        <p class="text-slate-400 mb-4" data-i18n="supportPage.contact.description">For issues not covered above or to report a bug, please contact our support team directly. We aim to respond within 48 hours.</p>
                        
                        <p class="text-slate-400 mb-4">
                            <strong class="text-slate-700 dark:text-slate-300" data-i18n="supportPage.contact.emailLabel">Support Email:</strong> 
                            <a class="text-primary hover:text-primary-700" href="mailto:yammering.firefly.wayt@mask.me">yammering.firefly.wayt@mask.me</a>
                        </p>
                        
                        <p class="text-slate-400 mb-4" data-i18n="supportPage.contact.includeInfo">Please include the following information in your email to help us assist you faster:</p>
                        
                        <ul class="list-disc list-inside text-slate-400 space-y-2">
                            <li data-i18n="supportPage.contact.info1">Your device model (e.g., iPhone 14, iPad Air).</li>
                            <li data-i18n="supportPage.contact.info2">Your iOS version.</li>
                            <li data-i18n="supportPage.contact.info3">A clear description of the issue or your question.</li>
                        </ul>
                    </div>

                    <!-- Legal & Policies -->
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                        <h2 class="text-xl font-semibold mb-6 flex items-center">
                            <span class="me-2">🔗</span> <span data-i18n="supportPage.legal.title">Legal & Policies</span>
                        </h2>
                        
                        <ul class="space-y-3">
                            <li>
                                <a class="text-primary hover:text-primary-700 flex items-center" href="{{ route('ios.privacy') }}">
                                    <i class="uil uil-angle-right-b me-1"></i>
                                    <span data-i18n="supportPage.legal.privacy">Privacy Policy — Learn how we handle your data.</span>
                                </a>
                            </li>
                            <li>
                                <a class="text-primary hover:text-primary-700 flex items-center" href="{{ route('ios.terms') }}">
                                    <i class="uil uil-angle-right-b me-1"></i>
                                    <span data-i18n="supportPage.legal.terms">Terms of Use — The terms governing the use of our app.</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Structured Data for FAQ -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FAQPage",
        "mainEntity": [
            {
                "@@type": "Question",
                "name": "How do I add my audiobooks to the app?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Voxi Book Player works with your existing audio files. You can add books via iTunes File Sharing (iOS), direct file import from cloud services (Dropbox, Google Drive), or simply by placing files in the VoxiBooks folder on your device."
                }
            },
            {
                "@@type": "Question",
                "name": "Does the app sync my progress between devices?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Currently, listening progress and settings are stored locally on your device. If you have opted-in within the app's settings, this data is saved in a local archive. Cloud sync between different devices is not yet available."
                }
            },
            {
                "@@type": "Question",
                "name": "How can I delete my local listening history?",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "You can clear your listening archive at any time. Go to App Settings → Privacy & Data → Clear Listening History. Alternatively, uninstalling the app will remove all local data."
                }
            }
        ]
    }
    </script>

    <!-- Footer wave -->
    <div class="relative">
        <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-slate-900">
            <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
</x-landing.layout>
