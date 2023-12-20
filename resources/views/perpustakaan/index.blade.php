@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/perpustakaan/create">Add Pengunjung Perpustakaan</a>
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
            @foreach($perpustakaan as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->jurusan}}</td>
                    <td>{{$p->nim}}</td>
                    <td>{{$p->jenis_kelamin}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/perpustakaan/{{$p->id}}/edit">Edit</a>
                            <form action="/perpustakaan/{{$p->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
