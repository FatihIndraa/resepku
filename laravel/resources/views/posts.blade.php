@extends('template.style')

@section('konten')
    <article>
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <p>{{ $post->body }}</p>
    </article>
@endsection
