<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterBarangModel;
use Illuminate\Support\Facades\Auth;

class MasterBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // proses ambil data dari mysql
        $barang = MasterBarangModel::all();
        return view('master/barang/index', compact('barang'));
    }

    public function create()
    {
        return view ('master/barang/form-tambah');
    }

    public function store(Request $request)
    {

       try {
        $insert = MasterBarangModel::create([
            'kode'              => $request -> for_kode,
            'nama'              => $request -> for_nama,
            'deskripsi'         => $request -> for_deskripsi,
            'id_kategory'       => 0,
            'id_gudang'         => 0,
            'dibuat_kapan'      => date('Y-m-d H:i:s'),
            'dibuat_oleh'       => Auth::user()->id,
        ]);

        if($insert) {
            return redirect()->route('master-barang')
            ->with('success', 'berhasil tambah barang');
        }

        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('master-tambah-barang')
            ->with('error', $th->getMessage());
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
