<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chatbot</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="{{ asset('assets/_manifest.json') }}" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/app/icons/icon-192x192.png') }}">
    <style>
        .speech-bubble {
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0;
            max-width: 80%;
        }

        .speech-left {
            background-color: #e0e0e0;
            align-self: flex-start;
        }

        .speech-right {
            background-color: #0084ff;
            color: white;
            align-self: flex-end;
        }
    </style>
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
                <input type="text" id="message" class="form-control" placeholder="Enter your Message here">
            </div>
            <div class="ms-3 speach-icon">
                <a href="#" id="send-message" class="bg-blue-dark me-2"><i class="fa fa-arrow-up mt-2"></i></a>
            </div>
        </div>
        <div class="page-content">
            <div class="page-title page-title-small">
                <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>AI Chatbot</h2>
                <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img"
                    data-src="{{ asset('assets/images/avatars/5s.png') }}"></a>
            </div>
            <div class="card header-card " data-card-height="85">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
            </div>
            <div class="content mt-5 pt-3" id="chat-container">
                <!-- Chat messages will be dynamically inserted here -->
            </div>
        </div>
        <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html"
            data-menu-height="420" data-menu-effect="menu-over"></div>
        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m"
            data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over"></div>
        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
            data-menu-load="menu-main.html" data-menu-active="nav-pages" data-menu-effect="menu-over"></div>
    </div>
    <script type="text/javascript" src="{{ asset('assets/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/scripts/custom.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sendButton = document.getElementById('send-message');
            const messageInput = document.getElementById('message');
            const chatContainer = document.getElementById('chat-container');

            function scrollToBottom() {
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }

            function addMessage(message, sender = 'user') {
                const messageClass = sender === 'user' ? 'speech-left' : 'speech-right';
                chatContainer.innerHTML += `
            <div class="speech-bubble ${messageClass}">
                ${message}
            </div>
            <div class="clearfix"></div>
        `;
                scrollToBottom();
            }

            sendButton.addEventListener('click', function() {
                const message = messageInput.value.trim();
                if (!message) return;

                addMessage(message, 'user');

                messageInput.value = '';

                fetch('chat', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify({
                            message
                        })
                    })

                    .then(response => response.json())
                    .then(data => {
                        addMessage(`<b>AI Chatbot</b> <br><span>${data.response}</span>`, 'bot');
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        addMessage(
                            `<b>AI Chatbot</b> <br><span>Sorry, something went wrong. Please try again.</span>`,
                            'bot');
                    });
            });

            // Optionally, handle Enter key for sending messages
            messageInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendButton.click();
                }
            });
        });
    </script>
</body>

</html>
