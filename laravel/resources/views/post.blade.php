@extends('template.style')

@section('konten')
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="mb-3">
                <img src="https://source.unsplash.com/1200x600/?{{ $post->category->name }}" alt="">
                <h2 class="fw-bold mb-2"><strong>{{ $post->title }}</strong></h2>

                <p>Author: {{ $post->user->name }}</p>
                <p>Category: <a href="{{ route('detail', $post->category->slug) }}">{{ $post->category->name }}</a></p>


                {!! $post->body !!}

                <a href="/">Back to Home</a>
            </div>
    </section>
@endsection
