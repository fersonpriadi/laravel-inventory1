<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterBarangModel;
use App\Models\StockBarangModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;   

class StockController extends Controller
{

    public function master_stok()
    {
        return view('stock/master-stok');
    }

     public function index()
    {
        // proses ambil data dari mysql
        $barang = MasterBarangModel::where('status', 1) -> get();
        return view('stock/form-stock', compact('barang'));
    }

    public function proses_stok_masuk(Request $request)
        {
            $aturan = 
            [
            'form_barang'       => 'required',
            'form_jumlah_masuk' => 'required',
            ];

        $messages =  
        [
             'required' => 'Wajib Diisi',   
        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        
        if($validator->fails()){
            return redirect()
            ->route('form-stock-barang')
            ->withErrors($validator)->withInput();
        }else {
            
                //jika inputan user sesuai
                //simpan ke database

                //mengambil data sisa stok terakhir di database
                //berdasarkan kode barang yang dipilih di form
            $cek_sisa = StockBarangModel::where('kode', $request->form_barang)
            ->orderBy('id', 'DESC')
            ->first();

            $stok_sisa = $cek_sisa['stok_sisa'];

            // jika ada sisa yang ditemukan
            if(isset($stok_sisa)){
                $isi = $stok_sisa + $request->form_jumlah_masuk;
            }else {
                    //jika tidak ada sisa
                    //stok sisa mengambil dari data jumlah barang yg masuk
                $isi = $request->form_jumlah_masuk;

            }
            
            $insert = StockBarangModel::create([
                'kode'                  => strtoupper($request->form_barang),
                'stok_masuk'            => $request->form_jumlah_masuk,
                'stok_keluar'           => 0,
                'stok_sisa'             => $isi,
                'dibuat_kapan'          => date('Y-m-d H:i:s'),
                'dibuat_oleh'           => Auth::user()->id,
                'diperbarui_kapan'      => null,
                'diperbarui_oleh'       => null,
            ]);
    
            if($insert) {
                return redirect()
                ->route('master-stok')
                ->with('success', 'berhasil tambah stok!');
                }
            }
        }
        catch (\Throwable $th){ 
            return redirect()
            ->route('form-stock-barang')
            ->with('danger', $th->getMessage());
            }
        }
}
