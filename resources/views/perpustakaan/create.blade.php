@extends('layouts.master')

@section('content')
    <div class="container">
    <h1>Create Pengunjung</h1>
        <form action="/perpustakaan/store" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nim</label>
            <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select> <br>
            <input type="submit" name="submit" class="btn btn-success" value="save">
        </form>
    </div>

@endsection
