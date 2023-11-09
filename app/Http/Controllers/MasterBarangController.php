<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterBarangModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MasterBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // proses ambil data dari mysql
        $barang = MasterBarangModel::where('status', 1) -> get();
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
            'for_kode' => 'required|max:10|alpha_dash|unique:stok_barang,kode',
            'for_nama' => 'required|min:5|max:50',
            'for_deskripsi' => 'required',
        ];

        $messages =  
        [
             'required' => 'Wajib Diisi',   
             'min' => 'minimal :min karakter',
             'max' => 'maksimal :max karakter',
             'unique' => 'Kode anda sama Bos!',

        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        
        if($validator->fails()){
            return redirect()
            ->route('master-barang-tambah')
            ->withErrors($validator)->withInput();
        }else{
            $insert = MasterBarangModel::create([
                'kode_barang'       => strtoupper($request -> for_kode),
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

    public function show($id)
    {
        // $barang = MasterBarangModel::where(['id' => $id])->first();
        $barang = DB::select(
            "SELECT
                mba.*,
                u1.name as dibuat_nama, u1.email as dibuat_email,
                u2.name as diperbarui_nama, u2.email as diperbarui_email
                FROM master_barang as mba
                LEFT JOIN users as u1 ON mba.dibuat_oleh = u1.id
                LEFT JOIN users as u2 ON mba.diperbarui_oleh = u2.id
                WHERE mba.id = ?;",
                [$id]
        );

        return view('master/barang/show-data', compact ('barang'));
    }

    public function edit($id)
    {
        $barang = DB::select(
            "SELECT
                mba.*,
                u1.name as dibuat_nama, u1.email as dibuat_email,
                u2.name as diperbarui_nama, u2.email as diperbarui_email
                FROM master_barang as mba
                LEFT JOIN users as u1 ON mba.dibuat_oleh = u1.id
                LEFT JOIN users as u2 ON mba.diperbarui_oleh = u2.id
                WHERE mba.id = ?;",
                [$id]
        );
        return view ('master/barang/form-edit', compact ('barang'));
    }

    public function update(Request $request, string $id)
    {
        $aturan = 
        [
            'for_nama' => 'required|min:5|max:50',
            'for_deskripsi' => 'required',
        ];

        $messages =  
        [
             'required' => 'Wajib Diisi',   
             'min' => 'minimal :min karakter',
             'max' => 'maksimal :max karakter',
             'unique' => 'Kode anda sama Bos!',

        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        
        // jika validasi gagal maka kembali ke form edit
        if($validator->fails()){
            return redirect()
            ->route('master-barang-edit',$id)
            ->withErrors($validator)->withInput();
        }else{
            // jika inputan user berhasil
            // update ke database
            $update = MasterBarangModel:: where('id', $id)->update([
                'nama'              => $request -> for_nama,
                'deskripsi'         => $request -> for_deskripsi,
                'diperbarui_oleh'   => Auth::user()->id,
                'diperbarui_kapan'  => date('Y-m-d H:i:s'),
            ]);
    
            if($update) {
                return redirect()->route('master-barang')
                ->with('success', 'berhasil update barang');
            }
        }
        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('master-barang-edit', $id)
            ->with('danger', $th->getMessage());
        }
    }

    public function destroy($id_barang)
    {
        try {
                $update = MasterBarangModel::
                where(['id' => $id_barang])->update([
                    'status' => 0,
                ]);
        
                if($update) {
                    return redirect()
                    ->route('master-barang')
                    ->with('success', 'berhasil menghapus barang');
                }
            }
            catch (\Throwable $th) 
            { 
                return redirect()
                ->route('master-barang')
                ->with('danger', $th->getMessage());
            }
        
    }
}
