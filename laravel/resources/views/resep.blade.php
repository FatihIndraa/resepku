@extends('template.navbar')
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
            <div class="text-center mb-sm-0 pb-sm- mt-sm-" style="margin-top: 10px;"><a
                    class="btn btn-primary text-center border rounded" role="button" data-bss-hover-animate="pulse"
                    href="{{ 'tambahresep' }}"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus-circle-fill">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z">
                        </path>
                    </svg>&nbsp;Tambah Resep</a></div>
        </div>
        <div class="container py-4 py-xl-5 mt-xxl-0 mt-0 mt-sm-0" style="padding-top: 0px;">
            <h3 class="text-center">Menu Pilihan:</h3>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 mt-xxl-0"
                style="margin-top:19px;margin-bottom:19px;">
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block card-img-top w-100 fit-cover"
                            style="height:400px;"
                            src="{{ asset('import/assets/img/01a8b20022d3ac8d1c0ad960e7b67466.jpg') }}" width="414"
                            height="200">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <p class="card-text"> Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                                dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                                metus. </p><a href="detailResep.html">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block card-img-top w-100 fit-cover"
                            style="height:400px;"
                            src="{{ asset('import/assets/img/01a8b20022d3ac8d1c0ad960e7b67466.jpg') }}" width="414"
                            height="200">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <p class="card-text"> Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                                dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                                metus. </p><a href="#">More Info</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block card-img-top w-100 fit-cover"
                            style="height:400px;"
                            src="{{ asset('import/assets/img/01a8b20022d3ac8d1c0ad960e7b67466.jpg') }}" width="414"
                            height="200">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <p class="card-text"> Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio,
                                dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                                metus. </p><a href="#">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
