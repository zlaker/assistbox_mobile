@php
    $appStoreUrl = 'https://apps.apple.com/us/app/voxi-book-player/id6756003204';
@endphp

<div id="mobile-download-cta" class="md:hidden fixed bottom-0 inset-x-0 z-40 p-3 pb-[max(0.75rem,env(safe-area-inset-bottom))] bg-white/95 dark:bg-slate-900/95 backdrop-blur border-t border-slate-200 dark:border-slate-700 shadow-[0_-4px_20px_rgb(0_0_0/0.08)]">
    <a href="{{ $appStoreUrl }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 w-full py-3.5 px-4 bg-primary hover:bg-primary-700 text-white rounded-xl font-semibold text-sm transition-colors">
        <i class="uil uil-apple text-lg" aria-hidden="true"></i>
        <span data-i18n="stickyCta.download">Download on the App Store</span>
    </a>
</div>
