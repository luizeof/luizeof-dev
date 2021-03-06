<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta name="robots" content="index, follow">
        <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

        @stack('schemaorg')

        <meta property="fb:app_id" content="203262620105524" /> 
        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}/"/>
        @if ($page->cover_image)
            <meta property="og:image" content="{{ $page->baseUrl . $page->cover_image }}"/>
        @else
            <meta property="og:image" content="https://luizeof.dev/assets/img/og-image.png"/>
        @endif
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}/">

        <link rel="canonical" href="{{ $page->getUrl() }}/" />

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link href="https://luizeof.dev/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-analytics.js"></script>
            <script>
            var firebaseConfig = {
                apiKey: "AIzaSyBTgkdDoOGInOkqd8i2jPtv30OPdrAWouo",
                authDomain: "luizeof-dev.firebaseapp.com",
                projectId: "www-luizeof-dev",
                storageBucket: "www-luizeof-dev.appspot.com",
                messagingSenderId: "938125096652",
                appId: "1:938125096652:web:e10e99f84cf1469d007469",
                measurementId: "G-5QE06K3X9T"
            };
            firebase.initializeApp(firebaseConfig);
            firebase.analytics();
            </script>
            <!-- Cloudflare Web Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "25de681d7f73400fbbc8c4f18b08c66e"}'></script><!-- End Cloudflare Web Analytics -->
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NXCHRB2');</script>
            <!-- End Google Tag Manager -->
        @endif

        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen font-sans leading-normal text-gray-800 bg-gray-100 dark:bg-gray-900 dark:text-gray-400">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXCHRB2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header class="flex items-center h-24 py-4 bg-white border-b shadow dark:bg-gray-900 dark:border-gray-700" role="banner">
            <div class="container flex items-center max-w-4xl px-6 mx-auto ">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-8 mr-3 md:h-10" src="/assets/img/luizeof.jpg" alt="{{ $page->siteName }} logo" />
                        <span class="my-0 text-lg font-semibold text-blue-800 md:text-2xl hover:text-blue-600">luizeof</span>
                    </a>
                </div>

                <div class="flex items-center justify-end flex-1">
                    @include('_nav.menu')
                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="container flex-auto w-full max-w-4xl px-6 py-16 mx-auto">
            @yield('body')
        </main>

        <footer class="py-4 mt-12 text-sm text-center bg-white dark:bg-gray-900" role="contentinfo">
            <ul class="flex flex-col justify-center list-none md:flex-row">
                <li class="md:mr-2">
                    &copy; <a href="https://luizeof.dev/" title="Luiz Eduardo">luizeof.dev</a> {{ date('Y') }}.
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
