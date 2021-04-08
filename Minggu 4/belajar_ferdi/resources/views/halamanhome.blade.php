@extends('layout.app')

@section('content')
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Halaman Home</h1>
                <p class="lead">halaman ini merupakan halaman home</p>
            </div>
            <p>Nama : {{ $nama }}</p>
            <p>Mata pelajaran</p>
            <ul>
                @foreach ($pelajaran as $p)
                <li>{{ $p }}</li>
                @endforeach
        </div>
@endsection