<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>CV. ZAKI | Company Profile</title>

    <link rel="icon"
          type="image/png"
          href="{{ asset('images/logocvzaki.png') }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
<link
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
rel="stylesheet">
</head>
<body>
<!-- ========================= -->
<!-- PRELOADER -->
<!-- ========================= -->


<div id="loader">

    <div class="loader-content">

        <img src="{{ asset('assets/images/logocvzaki.png') }}"
             class="loader-logo"
             alt="CV ZAKI">

        <h2>CV. ZAKI</h2>

        <p>Company Profile</p>

        <div class="loader-line">

            <span></span>

        </div>

    </div>

</div>


@include('partials.navbar')

@yield('content')

@include('partials.footer')

<!-- Floating WhatsApp -->
<a href="https://wa.me/6281243579997"
   class="floating-wa"
   target="_blank">

    <i class="bi bi-whatsapp"></i>

</a>

<!-- Scroll To Top -->
<button id="scrollTopBtn" aria-label="Scroll to Top">

    <i class="bi bi-arrow-up"></i>

</button>

</body>
</html>
