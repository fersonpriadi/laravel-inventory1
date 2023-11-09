<?php

namespace App\Http\Controllers;
use App\Models\StockBarangModel;

use Illuminate\Http\Request;

class LandingDatastokController extends Controller
{
    public function index()
    // kirim data ke view master stok untuk melihat data
    {
        // proses ambil data dari mysql
        $barang = StockBarangModel::where('status', 1) -> get();
        return view('stock/master-stok', compact('barang'));
    }
}
