@extends('layouts.main')

@section('content')
    <style>
        /* Container utama halaman detail buku */
        .book-detail-container {
            max-width: 700px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            font-family: 'Inter', sans-serif;
        }

        /* Judul buku */
        .book-detail-container h3 {
            font-size: 28px;
            margin-bottom: 15px;
            font-weight: 700;
            color: #222;
        }

        /* Label data */
        .book-detail-container p {
            font-size: 16px;
            margin: 8px 0;
            line-height: 1.6;
            color: #444;
        }

        .book-detail-container strong {
            color: #111;
            font-weight: 600;
        }

        /* Tombol */
        .book-detail-container button {
            background: #4c6ef5;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 15px;
            margin-top: 20px;
            cursor: pointer;
            transition: 0.2s ease-in-out;
        }

        .book-detail-container button:hover {
            background: #3b5bdb;
        }

        /* Link */
        .book-detail-container a {
            color: #4c6ef5;
            text-decoration: none;
            font-weight: 500;
        }

        .book-detail-container a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="book-detail-container">

        <h3>{{ $buku->judul }}</h3>

        <p><strong>Penulis:</strong> {{ $buku->penulis }}</p>
        <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
        <p><strong>Kategori:</strong> {{ $buku->kategori }}</p>
        <p><strong>Tahun:</strong> {{ $buku->tahun_terbit }}</p>
        <p><strong>Deskripsi:</strong> {{ $buku->deskripsi }}</p>

        {{-- 
    @if (session('role') == 'anggota')
        <form action="#" method="POST">
            <button type="submit">Pinjam Buku</button>
        </form>
    @else
        <p><a href="{{ url('/login') }}">Login</a> untuk meminjam buku.</p>
    @endif 
    --}}
    </div>
@endsection
