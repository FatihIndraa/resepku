@extends('template.style')

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
                @auth()
                    <h2 class="fw-bold text-white mb-3">Selamat Datang, {{ auth()->user()->name }}</h2>
                    <p class="mb-4">Mau masak makanan apa hari ini? yuk coba lihat berbagai macam resep yang ada </p>
                </div>
            </div>
            <div class="container py-4 py-xl-5">
                <div class="row mb-5" style="padding-bottom:0px;font-size:20px;">
                    <div class="col-md-8 col-xl-6 col-xxl-5 text-center mx-auto">
                        <h2>Menu</h2>
                        <p class="w-lg-50"> Berikut adalah berbagai macam resep menu makanan yang ada pada Resepku</p>
                    </div>
                </div>
            @else
                <h2 class="fw-bold text-white mb-3">Selamat Datang di Resepku</h2>
                <p class="mb-4">Mau masak makanan apa hari ini? yuk coba lihat berbagai macam resep yang ada </p>
                <a href="/login" class="btn btn-primary text-decoration-none">Login dulu yuk</a>
            </div>
            </div>
            <div class="container py-4 py-xl-5">
                <div class="row mb-5" style="padding-bottom:0px;font-size:20px;">
                    <div class="col-md-8 col-xl-6 col-xxl-5 text-center mx-auto">
                        <h2>Menu</h2>
                        <p class="w-lg-50"> Berikut adalah berbagai macam resep menu makanan yang ada pada Resepku</p>
                    </div>
                </div>
            @endauth
            @if ($posts->count())
                <div class="container">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p>
                                            <small class="text-muted">
                                                By: {{ $post->user->name }}
                                                {{ $post->updated_at->diffForHumans() }}
                                            </small>
                                        </p>
                                        <p>Category: <a
                                                href="{{ route('detail', $post->category->slug) }}">{{ $post->category->name }}</a>
                                        </p>
                                        <p class="card-text">{{ $post->excerpt }}</p>
                                        <a href="{{ route('post', $post) }}" class="btn btn-primary">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p class="text-center fs-4">No Post Found</p>
            @endif
        </div>
    </section>
@endsection
