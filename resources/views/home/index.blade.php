@extends('layouts.main')
@section('content')
    <h3>Selamat Datang di NeoPerpus</h3>
    <h2>Anda bisa melihat-lihat buku favorit anda disini</h2>
    <p>Berikut buku terbaru yang bisa anda pinjam:</p>

    <ul>
        @foreach ($terbaru as $buku)
            <li>
                <a href="{{ url('buku/' . $buku->id_buku) }}">{{ $buku->judul }}</a>
                - {{ $buku->penulis }}
            </li>
        @endforeach
    </ul>
@endsection
