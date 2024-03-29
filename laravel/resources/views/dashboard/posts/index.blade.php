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
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1,001</td>
                    <td>random</td>
                    <td>data</td>
                    <td>placeholder</td>
                    <td>text</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
