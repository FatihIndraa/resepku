@extends('template.style')

@section('konten')
    <div class="conteiner">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title }}</h1>
                <p><a href="/categories/{{ $post->category->slug }}"
                        class="text-decoraton-none">{{ $post->category->name }}</a></p>
                {{ !!$post->body!! }}
                <a href="/post" class="d-block mt-3">Back to post</a>
            </div>
        </div>
    </div>
@endsection
