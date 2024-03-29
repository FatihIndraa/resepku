@extends('template.sidebar')

@section('isidbs')
    <section class="py-4 py-xl-5">
        <div class="container">
            <div
                class="text-white bg-dark border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5 ps-xxl-5 mx-xxl-5 ms-xl-5 ms-xxl-5 mb-xxl-0">
                <div class="text-center text-lg-start py-3 py-lg-1">
                    <h2 class="fw-bold mb-2"><strong>Welcome Back, {{ auth()->user()->name }}</strong></h2>
                    <p class="mb-0">mau masak apa hari ini??</p>
                </div>
            </div>
        </div>
    </section>
@endsection
