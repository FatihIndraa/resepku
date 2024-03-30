@extends('template.navbar')

@section('konten')
    <h1 class="mb-5">{{ $post->title }}</h1>

    {{ $post->body }}

    <a href="/"></a>
@endsection
