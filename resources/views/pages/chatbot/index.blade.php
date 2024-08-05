<!DOCTYPE HTML>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>form Chatbot</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="{{ asset('assets/_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/app/icons/icon-192x192.png') }}">

</head>

<body class="theme-light">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <div class="header header-fixed header-auto-show header-logo-app">
            <a href="#" data-back-button class="header-title header-subtitle">Back to Pages</a>
            <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i
                    class="fas fa-sun"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i
                    class="fas fa-moon"></i></a>
            <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i
                    class="fas fa-brush"></i></a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        </div>
        <div id="footer-bar" class="d-flex">
            <div class="me-3 speach-icon">
                <a href="#" data-menu="menu-upload" class="bg-gray-dark ms-2"><i class="fa fa-plus mt-2"></i></a>
            </div>
            <div class="flex-fill speach-input">
                <input type="text" class="form-control" placeholder="Enter your Message here">
            </div>
            <div class="ms-3 speach-icon">
                <a href="#" class="bg-blue-dark me-2"><i class="fa fa-arrow-up mt-2"></i></a>
            </div>
        </div>
        <div class="page-content">
            <div class="page-title page-title-small">
                <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Ai Chatbot</h2>
                <a href="#" data-menu="menu-signin"  class="btn btn-xxs mb-3 rounded-s text-uppercase font-900 shadow-s border-green-dark bg-green-light"
                style="width: 100px;">
                    <i class="fa fa-plus">
                        <span></span>
                    </i>
                </a>
            </div>
            <div class="card header-card " data-card-height="85">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>
            <div class="content mt-5 pt-3">
                <div class="speech-bubble speech-right color-black"><b>Ai Chatbot</b> <br>
                    <span>Selamat pagi! saya adalah Ai Chatbot dari eband! silahkan ketik pertanyaan anda</span>
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>

            </div>
        </div>

        <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html"
            data-menu-height="420" data-menu-effect="menu-over">
        </div>
        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m"
            data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over">
        </div>
        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
            data-menu-load="menu-main.html" data-menu-active="nav-pages" data-menu-effect="menu-over">
        </div>
        <div id="menu-signin" class="menu menu-box-modal rounded-m" data-menu-height="320" data-menu-width="310">
            <form action="{{ route('chatbot.store') }}" method="POST">
                @csrf
                <div class="me-3 ms-3 mt-3">
                    <h1 class="font-700 mb-0">Pertanyaan & Jawaban</h1>
                    <div class="input-style no-borders has-icon validate-field mb-4 mt-3">
                        <input type="text" class="form-control validate-name" id="form1aa"
                            placeholder="Pertanyaan" name="pertanyaan">
                        <label for="form1aa" class="color-highlight mt-1 font-500 font-11">Pertanyaan</label>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                    </div>
                    <div class="input-style no-borders has-icon validate-field mb-4">
                        <input type="text" class="form-control validate-password" id="form1aab"
                            placeholder="Jawaban" name="jawaban">
                        <label for="form1aab" class="color-highlight mt-1 font-500 font-11">Jawaban</label>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                    </div>
                    <center>
                        <button type="submit"
                            class="btn btn-full btn-sm shadow-l rounded-s text-uppercase font-900 bg-green-dark mt-4 col-12">LOGIN</button>
                    </center>
                </div>
            </form>
        </div>

    </div>
    <script type="text/javascript" src="{{ asset('assets/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/custom.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('a.bg-blue-dark').click(function(event) {
                event.preventDefault();

                var pertanyaan = $('input.form-control').val();
                if (pertanyaan.trim() === '') {
                    alert('Tolong masukkan pertanyaan.');
                    return;
                }

                $('.content').append(
                    '<div class="speech-bubble speech-left bg-highlight"><span>' +
                    pertanyaan + '</span></div>  <div class="clearfix"></div>'
                );

                $.ajax({
                    url: 'chat',
                    method: 'POST',
                    data: {
                        pertanyaan: pertanyaan,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var jawaban = response.jawaban;
                        $('.content').append(
                            '<div class="speech-bubble speech-right color-black"><b>Ai Chatbot</b> <br><span>' +
                            jawaban + '</span></div>'
                        );
                        $('input.form-control').val('');
                        $('.content').scrollTop($('.content')[0]
                            .scrollHeight);
                    },
                    error: function() {
                        alert('Terjadi kesalahan.');
                    }
                });
            });
        });
    </script>


</body>
