@extends('layouts.master')

@section('content')
    <div class="container">
    <h1>Edit Data Pengunjung</h1>
        <form action="/perpustakaan/store" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$perpustakaan->nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$perpustakaan->jurusan}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nim</label>
            <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$perpustakaan->nim}}">
        </div>
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($perpustakaan->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                <option value="P" @if($perpustakaan->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select> <br>
            <input type="submit" name="submit" class="btn btn-success" value="save">
        </form>
    </div>
</form>