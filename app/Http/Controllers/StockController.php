<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterBarangModel;
use App\Models\StockBarangModel;

class StockController extends Controller
{
    public function stock()
    {
        return view('stock/form-stock');
    }

    public function index()
    {

        // proses ambil data dari mysql
        $barang = MasterBarangModel::where('status', 1) -> get();
        return view('stock/form-stock', compact('barang'));

        function proses_stok_masuk(Request $request)
        {
            $aturan = 
        [
            'for_barang' => 'required',
            'for_jumlah_masuk' => 'required',
        ];

        $messages =  
        [
             'required' => 'Wajib Diisi',   

        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        
        if($validator->fails()){
            return redirect()
            ->route('stok-masuk')
            ->withErrors($validator)->withInput();
        }else{

            $cek_sisa = StockBarangModel::where('kode', $request)
            ->orderBy('id', 'DESC')
            ->first();

            $stok_sisa = $cek_sisa['stok_sisa'];

            // jika ada sisa yang ditemukan
            if(isset($stok_sisa)){
                $isi = $stok_sisa + $request->form_jumlah_masuk;
            }else {

                $isi = $request->form_jumlah_masuk;

            }
            
            $insert = StockBarangModel::create([
                'kode'                  => strtoupper($request -> for_kode),
                'stok_masuk'            => $request -> for_nama,
                'stok_keluar'           => $request -> for_deskripsi,
                'stok_sisa'             => 0,
                'stok_minimal'          => 0,
                'dibuat_kapan'          => date('Y-m-d H:i:s'),
                'dibuat_oleh'           => Auth::user()->id,
                'diperbarui_kapan'      => null,
                'diperbarui_oleh'       => null,
            ]);
    
            if($insert) {
                return redirect()->route('stok-masuk')
                ->with('success', 'berhasil tambah stok');
            }
        }
        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('stok-masuk')
            ->with('danger', $th->getMessage());
        }
        }


        
    }
}
