@extends('template.navbar')

@section('konten')
    <div class="simple-slider">
        <div class="swiper-container me-xxl-0 pe-xxl-0 mb-xxl-0 pb-xxl-0">
            <div class="swiper-wrapper mb-0 pb-0" style="padding-left:0px;margin-bottom:0px;padding-bottom:87px;">
                <div class="swiper-slide"
                    style="background: url(&quot;{{ asset('import/assets/img/2149209253.jpg') }}&quot;) top / cover no-repeat;padding-bottom: 0px;margin-bottom: 0px;">
                </div>
                <div class="swiper-slide"
                    style="background: url(&quot;{{ asset('import/assets/img/101175.jpg') }}&quot;) center center / cover no-repeat;">
                </div>
                <div class="swiper-slide"
                    style="background: url(&quot;{{ asset('import/assets/img/front-view-tasty-meat-soup-consists-potatoes-meat-beans-dark-table.jpg') }}&quot;) center center / cover no-repeat;">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-white bg-dark border-0 border rounded p-4 p-md-5 mb-xxl-4">
                <h2 class="fw-bold text-white mb-3">Selamat Datang, User</h2>
                <p class="mb-4">Mau masak makanan apa hari ini? yuk coba lihat berbagai resep yang telah kamu buat</p>
            </div>
        </div>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5" style="padding-bottom:0px;font-size:20px;">
                <div class="col-md-8 col-xl-6 col-xxl-5 text-center mx-auto">
                    <h2>Menu</h2>
                    <p class="w-lg-50"> Berikut adalah berbagai macam resep menu makanan yang ada pada Resepku</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3" style="margin-bottom:19px;margin-top:0px;">
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block card-img-top w-100 fit-cover"
                            style="height:400px;"
                            src="{{ asset('import/assets/img/01a8b20022d3ac8d1c0ad960e7b67466.jpg') }}" width="414"
                            height="200">
                        <div class="card-body p-4">
                            <h4 class="card-title">Burger</h4>
                            <p class="card-text"><span style="color:rgb(17, 17, 17);">Sejenis roti berbentuk bundar yang
                                    diiris dua, dan di tengahnya diisi dengan patty yang biasanya diambil dari daging,
                                    kemudian sayur-sayuran berupa selada, tomat dan bawang bombai</span></p><a
                                href="detailResep.html">More Info</a>
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
                            <p class="card-text"> Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                                odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                                eget metus. </p><a href="#">More Info</a>
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
                            <p class="card-text"> Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                                odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                                eget metus. </p><a href="#">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3" style="margin-top:19px;margin-bottom:19px;">
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block card-img-top w-100 fit-cover"
                            style="height:400px;"
                            src="{{ asset('import/assets/img/01a8b20022d3ac8d1c0ad960e7b67466.jpg') }}" width="414"
                            height="200">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <p class="card-text"> Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                                odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                                eget metus. </p><a href="#">More Info</a>
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
                            <p class="card-text"> Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                                odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                                eget metus. </p><a href="#">More Info</a>
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
                            <p class="card-text"> Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo
                                odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at
                                eget metus. </p><a href="#">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
