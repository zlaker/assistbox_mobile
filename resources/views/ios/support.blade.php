<x-landing.layout 
    title="Support & Help Center — Voxi Book Player" 
    description="Get help with Voxi Book Player. FAQ, guides and contact information."
    :noindex="true"
    page="support"
>
    <!-- Page Header -->
    <section class="relative table w-full py-32 lg:py-40 bg-gradient-to-br from-slate-900 via-slate-800 to-primary/20">
        <div class="container relative">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="text-3xl leading-normal font-semibold text-white" data-i18n-heading>Support & Help Center</h3>
                <p class="text-slate-400 mt-2" data-i18n-subtitle>Having trouble or have a question? We're here to help!</p>
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
                        <h4 class="text-xl font-semibold mb-6 flex items-center">
                            <span class="me-2">🔍</span> Frequently Asked Questions (FAQ)
                        </h4>
                        
                        <div class="space-y-6">
                            <div>
                                <p class="font-medium text-slate-700 dark:text-slate-300 mb-2">Q: How do I add my audiobooks to the app?</p>
                                <p class="text-slate-400">A: Voxi Book Player works with your existing audio files. You can add books via iTunes File Sharing (iOS), direct file import from cloud services (Dropbox, Google Drive), or simply by placing files in the "VoxiBooks" folder on your device.</p>
                            </div>
                            
                            <div>
                                <p class="font-medium text-slate-700 dark:text-slate-300 mb-2">Q: Does the app sync my progress between devices?</p>
                                <p class="text-slate-400">A: Currently, listening progress and settings are stored locally on your device. If you have opted-in within the app's settings, this data is saved in a local archive. Cloud sync between different devices is not yet available.</p>
                            </div>
                            
                            <div>
                                <p class="font-medium text-slate-700 dark:text-slate-300 mb-2">Q: I enabled notifications but don't receive updates. Why?</p>
                                <p class="text-slate-400">A: First, please ensure notifications are enabled both in the app's settings and in your device's System Settings. The app uses a device identifier to send news about major updates.</p>
                            </div>
                            
                            <div>
                                <p class="font-medium text-slate-700 dark:text-slate-300 mb-2">Q: How can I delete my local listening history?</p>
                                <p class="text-slate-400">A: You can clear your listening archive at any time. Go to App Settings → Privacy & Data → Clear Listening History. Alternatively, uninstalling the app will remove all local data.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Start Guide -->
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md mb-6">
                        <h4 class="text-xl font-semibold mb-6 flex items-center">
                            <span class="me-2">📖</span> Quick Start Guide
                        </h4>
                        
                        <ul class="space-y-4 text-slate-400">
                            <li class="flex">
                                <i class="uil uil-check-circle text-primary me-2 mt-1"></i>
                                <span><strong class="text-slate-700 dark:text-slate-300">Importing Books:</strong> Use the '+' button in the 'My Library' section to import files from your device or cloud storage.</span>
                            </li>
                            <li class="flex">
                                <i class="uil uil-check-circle text-primary me-2 mt-1"></i>
                                <span><strong class="text-slate-700 dark:text-slate-300">Managing Playback:</strong> Use the player screen to control speed, set a sleep timer, or bookmark a moment.</span>
                            </li>
                            <li class="flex">
                                <i class="uil uil-check-circle text-primary me-2 mt-1"></i>
                                <span><strong class="text-slate-700 dark:text-slate-300">Organizing:</strong> Create custom playlists or use filters to sort your library by author, progress, or duration.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Support -->
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md mb-6">
                        <h4 class="text-xl font-semibold mb-6 flex items-center">
                            <span class="me-2">📧</span> Contact Support
                        </h4>
                        
                        <p class="text-slate-400 mb-4">For issues not covered above or to report a bug, please contact our support team directly. We aim to respond within 48 hours.</p>
                        
                        <p class="text-slate-400 mb-4">
                            <strong class="text-slate-700 dark:text-slate-300">Support Email:</strong> 
                            <a class="text-primary hover:text-primary-700" href="mailto:yammering.firefly.wayt@mask.me">yammering.firefly.wayt@mask.me</a>
                        </p>
                        
                        <p class="text-slate-400 mb-4">Please include the following information in your email to help us assist you faster:</p>
                        
                        <ul class="list-disc list-inside text-slate-400 space-y-2">
                            <li>Your device model (e.g., iPhone 14, iPad Air).</li>
                            <li>Your iOS version.</li>
                            <li>A clear description of the issue or your question.</li>
                        </ul>
                    </div>

                    <!-- Legal & Policies -->
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                        <h4 class="text-xl font-semibold mb-6 flex items-center">
                            <span class="me-2">🔗</span> Legal & Policies
                        </h4>
                        
                        <ul class="space-y-3">
                            <li>
                                <a class="text-primary hover:text-primary-700 flex items-center" href="{{ route('ios.privacy') }}">
                                    <i class="uil uil-angle-right-b me-1"></i>
                                    Privacy Policy — Learn how we handle your data.
                                </a>
                            </li>
                            <li>
                                <a class="text-primary hover:text-primary-700 flex items-center" href="{{ route('ios.terms') }}">
                                    <i class="uil uil-angle-right-b me-1"></i>
                                    Terms of Use — The terms governing the use of our app.
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Footer wave -->
    <div class="relative">
        <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-slate-900">
            <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
</x-landing.layout>
