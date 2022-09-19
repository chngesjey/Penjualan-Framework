<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Suplier;
use App\Models\Pembeli;

class DashboardController extends Controller
{
    public function index(){
        $barang = Barang::all();
        $kategori = Kategori::all();
        $suplier = Suplier::all();
        $pembeli = Pembeli::all();
        return view('home', compact('barang', 'suplier', 'kategori', 'pembeli'));
    }
}
