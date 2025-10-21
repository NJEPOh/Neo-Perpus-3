@extends('layouts.main')
@section('content')
    <h3>Selamat Datang di NeoPerpus</h3>
    <p>Berikut buku terbaru:</p>

    <ul>
        @foreach ($terbaru as $buku)
            <li>
                <a href="{{ url('buku/' . $buku->id_buku) }}">{{ $buku->judul }}</a>
                - {{ $buku->penulis }}
            </li>
        @endforeach
    </ul>
@endsection
