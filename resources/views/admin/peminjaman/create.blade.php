@extends('layouts.admin')

@section('content')
    <style>
        .form-container {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            font-family: Arial, sans-serif;
            width: 450px;
            margin-top: 20px;
        }

        .form-container h3 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        select,
        input[type="date"],
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        select:focus,
        input:focus {
            border-color: #4f46e5;
            outline: none;
        }

        button {
            background: #4f46e5;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.2s;
        }

        button:hover {
            background: #3730a3;
        }
    </style>

    <div class="form-container">
        <h3>Tambah Peminjaman Baru</h3>

        <form action="{{ route('peminjaman.store') }}" method="POST">
            @csrf

            <label>Anggota:</label>
            <select name="id_anggota" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach ($anggota as $a)
                    <option value="{{ $a->id_anggota }}">{{ $a->nama }}</option>
                @endforeach
            </select>

            <label>Buku:</label>
            <select name="id_buku" required>
                <option value="">-- Pilih Buku --</option>
                @foreach ($buku as $b)
                    <option value="{{ $b->id_buku }}">{{ $b->judul }}</option>
                @endforeach
            </select>

            <label>Tanggal Pinjam:</label>
            <input type="date" name="tanggal_pinjam" required>

            <label>Tanggal Kembali:</label>
            <input type="date" name="tanggal_kembali" required>

            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection
