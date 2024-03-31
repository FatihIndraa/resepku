@extends('template.style')

@section('konten')
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-white bg-dark border-0 border rounded p-4 p-md-5 mb-xxl-4">
                @auth()
                    <h2 class="fw-bold text-white mb-3">Haloooo, {{ auth()->user()->name }}</h2>
                    <p class="mb-4">hayoo, pasti lagi mau cari {{ $category->name }}</p>
                </div>
            </div>
            <div class="container py-4 py-xl-5">
                <div class="row mb-5" style="padding-bottom:0px;font-size:20px;">
                    <div class="col-md-8 col-xl-6 col-xxl-5 text-center mx-auto">
                        <h2>Menu</h2>
                        <p class="w-lg-50">Berikut adalah berbagai macam resep menu yang ada pada Resepku.</p>
                    </div>
                </div>
            @else
                <h2 class="fw-bold text-white mb-3">Selamat Datang di Resepku</h2>
                <p class="mb-4">Mau masak makanan apa hari ini? Yuk coba lihat berbagai macam resep yang ada.</p>
                <a href="/login" class="btn btn-primary text-decoration-none">Login dulu yuk</a>
            </div>
            </div>
            <div class="container py-4 py-xl-5">
                <div class="row mb-5" style="padding-bottom:0px;font-size:20px;">
                    <div class="col-md-8 col-xl-6 col-xxl-5 text-center mx-auto">
                        <h2>Menu {{ $category->name }}</h2>
                        <p class="w-lg-50">Berikut adalah berbagai macam resep menu makanan yang ada pada Resepku.</p>
                    </div>
                </div>
            @endauth
            @if ($posts->count())
                <div class="container">
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100"> <!-- Menambahkan class h-100 untuk menetapkan tinggi card -->
                                    <img src="https://source.unsplash.com/1200x600/?{{ $post->category->name }}"
                                        class="card-img-top" style="height: 300px; object-fit: cover;" alt="...">
                                    <!-- Menetapkan tinggi tetap untuk gambar -->
                                    <div class="card-body d-flex flex-column">
                                        <!-- Menambahkan class d-flex dan flex-column untuk isi card -->
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
                                        <div class="flex-grow-1">
                                            <!-- Menggunakan class flex-grow-1 untuk membuat deskripsi post memanjang -->
                                            <p class="card-text">{{ $post->excerpt }}</p>
                                        </div>
                                        <a href="{{ route('post', $post) }}" class="btn btn-primary mt-auto">Lihat
                                            Selengkapnya</a>
                                        <!-- Menggunakan class mt-auto untuk menjaga tombol tetap di bagian bawah card -->
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
