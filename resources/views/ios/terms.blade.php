<x-landing.layout 
    title="Terms of Use — Voxi Book Player" 
    description="Terms of Use for Voxi Book Player application"
    :noindex="true"
    page="terms"
>
    <!-- Page Header -->
    <section class="relative table w-full py-32 lg:py-40 bg-gradient-to-br from-slate-900 via-slate-800 to-primary/20">
        <div class="container relative">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="text-3xl leading-normal font-semibold text-white" data-i18n-heading>Terms of Use</h3>
                <p class="text-slate-400 mt-2" data-i18n-subtitle>Last Updated: December 3, 2025</p>
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
                    <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                        
                        <h4 class="text-xl font-semibold mb-4">1. Acceptance</h4>
                        <p class="text-slate-400 mb-6">By downloading or using the "Voxi Book Player" application (the "App"), you agree to be bound by these Terms of Use. If you do not agree, do not use the App.</p>

                        <h4 class="text-xl font-semibold mb-4">2. Service Description</h4>
                        <p class="text-slate-400 mb-6">Voxi Book Player is a mobile audio player that allows you to manage and play audiobook files stored on your personal device. The App is a tool and does not provide any audiobook content itself.</p>

                        <h4 class="text-xl font-semibold mb-4">3. User Responsibilities</h4>
                        <p class="text-slate-400 mb-6">You are solely responsible for the audiobook files you load into the App. You must ensure you have the necessary rights or licenses to use this content. You agree not to use the App for any unlawful purpose.</p>

                        <h4 class="text-xl font-semibold mb-4">4. Intellectual Property</h4>
                        <p class="text-slate-400 mb-6">All rights, title, and interest in and to the App (including the code, graphics, and "Voxi Book Player" trademark) are and will remain the exclusive property of Voxi Book Player.</p>

                        <h4 class="text-xl font-semibold mb-4">5. Disclaimer of Warranty</h4>
                        <p class="text-slate-400 mb-6 uppercase text-sm">THE APP IS PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT ANY WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED. WE DO NOT WARRANT THAT THE APP WILL BE UNINTERRUPTED OR ERROR-FREE.</p>

                        <h4 class="text-xl font-semibold mb-4">6. Limitation of Liability</h4>
                        <p class="text-slate-400 mb-6 uppercase text-sm">TO THE MAXIMUM EXTENT PERMITTED BY LAW, IN NO EVENT SHALL VOXI BOOK PLAYER BE LIABLE FOR ANY INDIRECT, INCIDENTAL, OR CONSEQUENTIAL DAMAGES ARISING OUT OF YOUR USE OR INABILITY TO USE THE APP.</p>

                        <h4 class="text-xl font-semibold mb-4">7. Governing Law</h4>
                        <p class="text-slate-400 mb-6">These Terms shall be governed by the laws of the Republic of Cyprus, without regard to its conflict of law provisions.</p>

                        <h4 class="text-xl font-semibold mb-4">8. Changes to Terms</h4>
                        <p class="text-slate-400 mb-6">We reserve the right to modify these Terms at any time. We will notify users by updating the "Last Updated" date. Your continued use of the App after any change constitutes your acceptance of the new Terms.</p>

                        <h4 class="text-xl font-semibold mb-4">9. Contact Us</h4>
                        <p class="text-slate-400 mb-6">For any questions regarding these Terms, please contact us via our <a class="text-primary hover:text-primary-700" href="{{ route('ios.support') }}">Support Page</a>.</p>

                        <div class="border-t border-gray-100 dark:border-gray-800 pt-6 mt-6">
                            <p class="text-slate-400 text-sm">Related: 
                                <a class="text-primary hover:text-primary-700" href="{{ route('ios.privacy') }}">Privacy Policy</a> • 
                                <a class="text-primary hover:text-primary-700" href="{{ route('ios.support') }}">Support</a>
                            </p>
                        </div>
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
