<body>
    <nav class="navbar navbar-expand-md bg-dark py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center text-light" href="{{ '/' }}">Resepku</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navcol-2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navcol-2">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle link-light" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <b> Selamat datang, {{ auth()->user()->name }}</b>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"><b><i class="bi bi-calendar-check"></i> My
                                            Dashboard</b></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><b><i class="bi bi-box-arrow-left"></i>
                                                Logout</b></button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="nav-link active link-light"><i class="bi bi-box-arrow-in-right"></i>
                                Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>


    @yield('konten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('import/assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('import/assets/js/Simple-Slider-swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/Simple-Slider.js') }}"></script>
    <script src="{{ asset('import/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/bs-init.js') }}"></script>
</body>
