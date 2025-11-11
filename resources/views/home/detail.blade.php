@extends('layouts.main')
@section('content')
    <h3>{{ $buku->judul }}</h3>
    <p><strong>Penulis:</strong> {{ $buku->penulis }}</p>
    <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
    <p><strong>Kategori:</strong> {{ $buku->kategori }}</p>
    <p><strong>Tahun:</strong> {{ $buku->tahun_terbit }}</p>
    <p><strong>Deskripsi:</strong> {{ $buku->deskripsi }}</p>

    <!-- @if (session('role') == 'anggota')
        <form action="#" method="POST">
            <button type="submit">Pinjam Buku</button>
        </form>
    @else
        <p><a href="{{ url('/login') }}">Login</a> untuk meminjam buku.</p>
    @endif -->
@endsection
