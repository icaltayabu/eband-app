<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Azures BootStrap</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/css/fontawesome-all.min.css') }}">
    {{-- <link rel="manifest" href="{{ asset('assets/_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js"> --}}
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/app/icons/icon-192x192.png') }}"> --}}

    <link rel="apple-touch-icon" href="https://eband.alpsstudio.id/logo.png">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>

<body class="bg-highlight">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <div class="page-content pb-0">
            <div class="card preload-img" data-card-height="cover" style="background-color: #3B86F8">
                <div class="card-center text-center">
                    <h1 class="fa-4x color-theme font-900" style="color: white">eband</h1>
                    <h3 class="font-300" style="color: white; font:Poppins">aplikasi bandara</h3>
                    <p class="boxed-text-xl pt-4">
                        <img data-src="{{ asset('assets/images/eband_featur/logo.png') }}"
                            class="img-fluid rounded-xs preload-img" alt="img">
                    </p>
                </div>
                <div class="card-bottom mb-5">
                    <a href="{{ route('login') }}"
                        class="back-button btn btn-center-m btn-m rounded-sm font-900 text-uppercase scale-box"
                        style="background-color: #0B8E00">
                        Klik untuk mulai</a>
                </div>
                <div class="card-overlay bg-theme opacity-95"></div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="{{ asset('assets/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/custom.js') }}"></script>
</body>
