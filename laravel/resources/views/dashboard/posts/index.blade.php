@extends('template.sidebar')

@section('isidbs')
    <section class="py-4 py-xl-5">
        <div class="container">
            <div
                class="text-white bg-dark border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5 ps-xxl-5 mx-xxl-5 ms-xl-5 ms-xxl-5 mb-xxl-0">
                <div class="text-center text-lg-start py-3 py-lg-1">
                    <h2 class="fw-bold mb-2"><strong>Postinganku, {{ auth()->user()->name }}</strong></h2>
                    <p class="mb-0">mau masak apa hari ini??</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-15">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>
                                        <a href="/dashboard/posts/{{ $post->slug }}"
                                            class="badge bg-info icon-link icon-link-hover"
                                            style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                                            data-toggle="tooltip" data-placement="bottom" title="Lihat Postingan"><i
                                                class="bi bi-eye"></i>
                                        </a>
                                        <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                            class="badge bg-warning icon-link icon-link-hover"
                                            style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                                            data-toggle="tooltip" data-placement="bottom" title="Edit Postingan"><i
                                                class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0 icon-link icon-link-hover"style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                                            data-toggle="tooltip" data-placement="bottom" title="Hapus Postingan" onclick="return confirm('yakin untuk hapus data??')"><i
                                                class="bi bi-x-circle"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
