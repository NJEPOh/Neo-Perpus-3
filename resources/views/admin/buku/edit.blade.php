@extends('layouts.admin')
@section('content')
    <style>
        /* ============================
           STYLE: EDIT FORM BUKU
        ============================ */

        h3 {
            font-size: 26px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-box {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            font-weight: 600;
            color: #333;
            display: block;
            margin-top: 12px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            outline: none;
            transition: 0.2s;
        }

        input:focus,
        textarea:focus {
            border-color: #2a4bd7;
            box-shadow: 0 0 4px rgba(42, 75, 215, 0.3);
        }

        textarea {
            min-height: 90px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            background: #2a4bd7;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #1d3abf;
            transform: translateY(-2px);
        }
    </style>

    <h3>Edit Data Buku</h3>

    <div class="form-box">
        <form action="{{ route('buku.update', $buku->id_buku) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Judul:</label>
            <input type="text" name="judul" value="{{ $buku->judul }}" required>

            <label>Penulis:</label>
            <input type="text" name="penulis" value="{{ $buku->penulis }}" required>

            <label>Penerbit:</label>
            <input type="text" name="penerbit" value="{{ $buku->penerbit }}" required>

            <label>Kategori:</label>
            <input type="text" name="kategori" value="{{ $buku->kategori }}" required>

            <label>Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>

            <label>Deskripsi:</label>
            <textarea name="deskripsi">{{ $buku->deskripsi }}</textarea>

            <label>Stok:</label>
            <input type="number" name="stok" value="{{ $buku->stok }}" required>

            <button type="submit">Perbarui</button>
        </form>
    </div>
@endsection
