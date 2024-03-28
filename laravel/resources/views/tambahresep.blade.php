@extends('template.navbar')
@section('konten')
    <form action="{{ url('resep') }}" method="post">
        @csrf
        <div>
            <p>nama makanan
                <input type="text" name="nama">
            </p>
            <p>deskripsi
                <input type="text" name="deskripsi">
            </p>
            <p>bahan
                <input type="text" name="bahan">
            </p>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection
