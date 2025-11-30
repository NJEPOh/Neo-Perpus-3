@extends('layouts.admin')

@section('content')
    <style>
        .form-container {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            max-width: 450px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        .form-container h3 {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
            font-size: 22px;
        }

        .form-container label {
            font-weight: bold;
            color: #444;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #aaa;
            border-radius: 8px;
            font-size: 15px;
        }

        .form-container button {
            width: 100%;
            padding: 12px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .form-container button:hover {
            background: #3730a3;
        }
    </style>

    <div class="form-container">
        <h3>Edit Data Anggota</h3>

        <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nama:</label>
            <input type="text" name="nama" value="{{ $anggota->nama }}" required>

            <label>Email:</label>
            <input type="email" name="email" value="{{ $anggota->email }}" required>

            <button type="submit">Perbarui</button>
        </form>
    </div>
@endsection
