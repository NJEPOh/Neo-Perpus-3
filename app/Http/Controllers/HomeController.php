<?php

namespace App\Http\Controllers;

use App\Models\Buku;

class HomeController extends Controller
{
    public function index()
    {
        $terbaru = Buku::orderBy('id_buku', 'desc')->take(3)->get();
        return view('home.index', compact('terbaru'));
    }

    public function katalog()
    {
        $buku = Buku::all();
        return view('home.katalog', compact('buku'));
    }

    public function detail($id)
    {
        $buku = Buku::findOrFail($id);
        return view('home.detail', compact('buku'));
    }
}
