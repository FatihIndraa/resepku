@extends('template.style')
@section('konten')
    <section class="py-4 py-xl-5" style="margin-top: -38px;">
        <div class="container py-4 py-xl-5 mb-sm-0">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Pilihan Menu Resep</h2>
                    <p class="w-lg-50">Berikut pilihan resepmenu yang ada pada Resepku</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <a href="{{ 'home' }}" style="text-decoration: none">
                        <div class="card border-0 shadow-none">
                            <div class="card-body d-flex align-items-center p-0" data-bss-hover-animate="bounce"><img
                                    class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130"
                                    src="{{ asset('import/assets/img/2149209253.jpg') }}">
                                <div>
                                    <h5 class="fw-bold text-primary mb-0">Makanan</h5>
                                    <p class="text-muted mb-1">Pilihan Menu Makanan</p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col">
                    <a href="{{ 'home' }}" style="text-decoration: none">
                        <div class="card border-0 shadow-none">
                            <div class="card-body d-flex align-items-center p-0" data-bss-hover-animate="bounce"><img
                                    class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130"
                                    src="{{ asset('import/assets/img/d11e0da5803c39f99725f043f955a998.jpg') }}">
                                <div>
                                    <h5 class="fw-bold text-primary mb-0">Minuman</h5>
                                    <p class="text-muted mb-1">Pilihan Menu Minuman</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ 'home' }}" style="text-decoration: none">
                        <div class="card border-0 shadow-none">
                            <div class="card-body d-flex align-items-center p-0" data-bss-hover-animate="bounce"><img
                                    class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130"
                                    src="{{ asset('import/assets/img/6e4d865ca184abbbfd06f8f9fa7c6137.jpg') }}">
                                <div>
                                    <h5 class="fw-bold text-primary mb-0">Camilan</h5>
                                    <p class="text-muted mb-1">Pilihan Menu Camilan</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    </section>
@endsection
