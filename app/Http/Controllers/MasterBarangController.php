<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterBarangModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $aturan = 
        [
            'for_kode' => 'required|min:4|max:7|alpha_dash',
            'for_nama' => 'required|min:10|max:50',
            'for_deskripsi' => 'max:255|alpha_dash',
        ];

        $messages =  
        [
             'required' => 'Wajib Diisi',   
             'min' => 'minimal :min karakter',
             'max' => 'maksimal :max karakter',
        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        
        if($validator->fails()){
            return redirect()
            ->route('master-barang-tambah')
            ->withErrors($validator)->withInput();
        }else{
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
        }
        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('master-barang-tambah')
            ->with('danger', $th->getMessage());
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
