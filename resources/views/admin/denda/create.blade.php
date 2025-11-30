@extends('layouts.admin')
@section('content')
    <style>
        .form-container {
            background: #fff;
            padding: 20px 25px;
            border-radius: 8px;
            max-width: 480px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h3 {
            margin-bottom: 18px;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="number"],
        input[type="password"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background: #f9f9f9;
        }

        textarea {
            height: 90px;
            resize: vertical;
        }

        button {
            background: #4CAF50;
            color: white;
            padding: 10px 18px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 10px;
        }

        button:hover {
            background: #45a049;
        }
    </style>

    <div class="form-container">
        <h3>Tambah Denda</h3>
        <form action="{{ route('denda.store') }}" method="POST">
            @csrf

            <label>ID Peminjaman:</label>
            <select name="id_peminjaman" required>
                <option value="">-- Pilih Peminjaman --</option>
                @foreach ($peminjaman as $p)
                    <option value="{{ $p->id_peminjaman }}">#{{ $p->id_peminjaman }}</option>
                @endforeach
            </select>
            <br><br>

            <label>Jumlah Denda:</label>
            <input type="number" step="0.01" name="jumlah_denda" required>
            <br><br>

            <label>Keterangan:</label>
            <textarea name="keterangan"></textarea>
            <br><br>

            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection
