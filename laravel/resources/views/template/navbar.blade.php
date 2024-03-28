<!DOCTYPE html>
<html data-bs-theme="light" lang="en" data-bss-forced-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>design</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('import/assets/css/swiper-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Navbar-Right-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Simple-Slider-swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Simple-Slider.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Testimonials-images.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('import/assets/css/css/Simple-Slider-swiper-bundle.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="{{ 'home' }}"><span
                    class="text-light">Resepku</span></a><button data-bs-toggle="collapse" data-bs-target="#navcol-2"
                class="navbar-toggler bg-light"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active link-light" href="{{ 'home' }}">Beranda</a>
                    </li>
                    <li class="nav-item"><a class="nav-link link-light" href="{{ 'resep' }}">Resep</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('konten')
    @include('template.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('import/assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('import/assets/js/Simple-Slider-swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/Simple-Slider.js') }}"></script>
    <script src="{{ asset('import/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
