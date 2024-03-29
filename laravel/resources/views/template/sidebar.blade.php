<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('import/assets/css/Navbar-Right-Links-Dark-icons.css') }}">
</head>

<body>
    <div class="bg-body shadow d-flex flex-column flex-shrink-0 position-fixed top-0 bottom-0" style="width: 4.5rem;">
        <ul class="nav nav-pills flex-column text-center nav-flush mb-auto">
            <li class="nav-item" data-bss-hover-animate="rubberBand"><a
                    class="nav-link py-3 border-bottom rounded-0 {{ Request::is('dashboard') ? 'active' : '' }}"
                    href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-calendar-plus">
                        <i class="bi bi-clipboard2-data"></i>
                    </svg></a></li>
            <li class="nav-item" data-bss-hover-animate="rubberBand"><a
                    class="nav-link py-3 border-bottom rounded-0 {{ Request::is('dashboard/posts') ? 'active' : '' }}"
                    href="/dashboard/posts"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-people">
                        <i class="bi bi-layout-text-sidebar-reverse"></i>
                    </svg></a></li>
        </ul>
        <div class="dropdown p-3 border-top"><a
                class="dropdown-toggle link-body-emphasis d-flex align-items-center text-decoration-none"
                aria-expanded="false" data-bs-toggle="dropdown" role="button"><img class="rounded-circle"
                    alt="" width="32" height="32"
                    src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" style="object-fit: cover;"></a>
            <div class="dropdown-menu shadow text-small" data-popper-placement="top-start"><a class="dropdown-item"
                    href="#"><i class="bi bi-upload"></i> New project...</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                        class="bi bi-box-arrow-right"></i> Sign out</a>
            </div>
        </div>
    </div>
    @yield('isidbs')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('import/assets/js/bs-init.js') }}"></script>
</body>

</html>
