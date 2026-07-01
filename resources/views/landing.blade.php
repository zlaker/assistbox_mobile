<x-landing.layout
    :landing="true"
    title="Voxi Book Player - Audiobook Player & Statistics for iOS"
    description="Free audiobook player for iPhone & iPad with powerful listening statistics. Track progress, sleep timer, speed control 0.5x-2.0x, VoiceOver support. Download from App Store."
    keywords="audiobook player, audiobook app, ios audiobook player, iphone audiobook, ipad audiobook, listening statistics, audiobook tracker, sleep timer, voiceover audiobook, free audiobook player, m4b player, mp3 audiobook"
    :canonical="url('/')"
>
    @push('head')
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
        "description": "Free audiobook player for iPhone & iPad with powerful listening statistics. Track every moment, never lose progress.",
        "downloadUrl": "https://apps.apple.com/us/app/voxi-book-player/id6756003204",
        "softwareVersion": "3.1.0",
        "author": {
            "@@type": "Organization",
            "name": "Voxi Book Player"
        },
        "screenshot": "{{ asset('landing/assets/images/app/basic_player_ios.png') }}",
        "featureList": "Audiobook playback, Listening statistics, Sleep timer, Speed control 0.5x-2.0x, VoiceOver support, Background playback, Lock screen controls, iCloud sync, Wi-Fi Transfer, OPDS"
    }
    </script>
    @endpush

    @include('landing.partials.content')

    @push('scripts')
    <script>
        function toggleNews(id) {
            const card = document.getElementById('news-card-' + id);
            const fullContent = document.getElementById('news-full-' + id);
            if (!fullContent || !card) {
                return;
            }

            const isHidden = fullContent.classList.contains('hidden');
            fullContent.classList.toggle('hidden', !isHidden);
            card.setAttribute('aria-expanded', isHidden ? 'true' : 'false');

            card.querySelectorAll('button[aria-controls="news-full-' + id + '"]').forEach(function (btn) {
                btn.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
            });
        }
    </script>
    @endpush
</x-landing.layout>
