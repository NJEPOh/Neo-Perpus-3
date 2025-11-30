@extends('layouts.main')

@section('content')
    <div class="landing-wrapper">

        <h3 class="title-main">Selamat Datang di NeoPerpus 👋</h3>
        <p class="subtitle">Temukan dan pinjam buku favoritmu di sini.</p>

        <p class="section-info">Buku terbaru yang bisa Anda pinjam:</p>

        {{-- CAROUSEL HORIZONTAL --}}
        <div class="carousel">
            @foreach ($terbaru as $buku)
                <div class="book-card">
                    <a href="{{ url('buku/' . $buku->id_buku) }}" class="book-title">
                        {{ $buku->judul }}
                    </a>
                    <span class="book-author">{{ $buku->penulis }}</span>
                </div>
            @endforeach
        </div>

    </div>

    {{-- ============ CSS ============ --}}
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #fafafa;
            margin: 0;
            padding: 0;
            color: #121212;
        }

        .landing-wrapper {
            padding: 40px 28px;
            max-width: 900px;
            margin: 0 auto;
        }

        .title-main {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .subtitle {
            font-size: 16px;
            color: #555;
            margin-bottom: 24px;
        }

        .section-info {
            font-size: 15px;
            color: #444;
            margin-bottom: 14px;
        }

        /* ===== Carousel Horizontal ===== */
        .carousel {
            display: flex;
            overflow-x: auto;
            gap: 16px;
            padding-bottom: 10px;

            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;

            /* Hilangkan scrollbar */
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .carousel::-webkit-scrollbar {
            display: none;
        }

        /* ===== Card Buku ===== */
        .book-card {
            min-width: 180px;
            background: #fff;
            padding: 16px 20px;
            border-radius: 14px;
            border: 1px solid #e8e8e8;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);

            scroll-snap-align: start;
            transition: 0.25s ease;
            flex-shrink: 0;

            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .book-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
        }

        .book-title {
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            color: #0071ff;
        }

        .book-title:hover {
            text-decoration: underline;
        }

        .book-author {
            font-size: 13px;
            color: #666;
        }
    </style>
@endsection
