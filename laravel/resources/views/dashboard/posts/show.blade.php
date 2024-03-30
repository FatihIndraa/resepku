@extends('template.sidebar')

@section('isidbs')
    <div class="container">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <!-- Tambahkan bagian lain dari postingan yang ingin Anda tampilkan -->
    </div>
@endsection
