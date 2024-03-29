<body>
    <nav class="navbar navbar-expand-md bg-dark py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="{{ '/' }}"><span
                    class="text-light">Resepku</span></a><button data-bs-toggle="collapse" data-bs-target="#navcol-2"
                class="navbar-toggler bg-light"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active link-light" href="{{ '/' }}">Beranda</a>
                    </li>
                    <li class="nav-item"><a class="nav-link link-light" href="{{ '/resep' }}">Resep</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('konten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('import/assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('import/assets/js/Simple-Slider-swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/Simple-Slider.js') }}"></script>
    <script src="{{ asset('import/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
