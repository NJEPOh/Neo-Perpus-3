@extends('layouts.admin')
@section('content')
    <h3>Edit Data Denda</h3>
    <form action="{{ route('denda.update', $denda->id_denda) }}" method="POST">
        @csrf
        @method('PUT')

        <label>ID Peminjaman:</label><br>
        <select name="id_peminjaman">
            @foreach ($peminjaman as $p)
                <option value="{{ $p->id_peminjaman }}" {{ $denda->id_peminjaman == $p->id_peminjaman ? 'selected' : '' }}>
                    #{{ $p->id_peminjaman }}</option>
            @endforeach
        </select><br><br>

        <label>Jumlah Denda:</label><br>
        <input type="number" step="0.01" name="jumlah_denda" value="{{ $denda->jumlah_denda }}"><br><br>

        <label>Keterangan:</label><br>
        <textarea name="keterangan">{{ $denda->keterangan }}</textarea><br><br>

        <button type="submit">Perbarui</button>
    </form>
@endsection
