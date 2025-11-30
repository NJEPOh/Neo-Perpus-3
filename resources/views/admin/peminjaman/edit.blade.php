@extends('layouts.admin')

@section('content')
    <style>
        .edit-container {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            margin: 30px auto;
            font-family: Arial, sans-serif;
        }

        .edit-container h3 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
            font-size: 14px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        button {
            background: #4f46e5;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            width: 100%;
            margin-top: 10px;
            font-weight: 600;
            transition: 0.2s;
        }

        button:hover {
            background: #3730a3;
        }
    </style>

    <div class="edit-container">
        <h3>Edit Data Peminjaman</h3>

        <form action="{{ route('peminjaman.update', $peminjaman->id_peminjaman) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Anggota:</label>
            <select name="id_anggota">
                @foreach ($anggota as $a)
                    <option value="{{ $a->id_anggota }}" {{ $peminjaman->id_anggota == $a->id_anggota ? 'selected' : '' }}>
                        {{ $a->nama }}
                    </option>
                @endforeach
            </select>

            <label>Buku:</label>
            <select name="id_buku">
                @foreach ($buku as $b)
                    <option value="{{ $b->id_buku }}" {{ $peminjaman->id_buku == $b->id_buku ? 'selected' : '' }}>
                        {{ $b->judul }}
                    </option>
                @endforeach
            </select>

            <label>Status:</label>
            <select name="status">
                <option value="Dipinjam" {{ $peminjaman->status == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                <option value="Dikembalikan" {{ $peminjaman->status == 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan
                </option>
                <option value="Terlambat" {{ $peminjaman->status == 'Terlambat' ? 'selected' : '' }}>Terlambat</option>
            </select>

            <button type="submit">Perbarui</button>
        </form>
    </div>
@endsection
