<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;
use App\Models\Denda;

class AdminController extends Controller
{
    public function index()
    {
        $totalBuku = Buku::count();
        $totalAnggota = Anggota::count();
        $totalPinjam = Peminjaman::count();
        $totalDenda = Denda::count();

        return view('admin.dashboard', compact('totalBuku', 'totalAnggota', 'totalPinjam', 'totalDenda'));
    }
}
