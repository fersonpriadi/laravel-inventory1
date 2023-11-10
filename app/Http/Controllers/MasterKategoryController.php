<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Request;
use App\Models\MasterKategoryModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MasterKategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // proses ambil data dari mysql
        $barang = MasterKategoryModel::where('status', 1) -> get();
        return view('master/kategory/index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master/kategory/form-tambah-kategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aturan = 
        [
            'for_kode' => 'required|max:10|alpha_dash',
            'for_jenis_kategory' => 'required|min:5|max:50',
            'for_kemasan' => 'required',
        ];

        $messages =  
        [
             'required' => 'Wajib Diisi',   
             'min' => 'minimal :min karakter',
             'max' => 'maksimal :max karakter',
            //  'unique' => 'Kode anda sama Bos!',

        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        
        if($validator->fails()){
            return redirect()
            ->route('master-kategory-tambah')
            ->withErrors($validator)->withInput();
        }else{
            $insert = MasterKategoryModel::create([
                'kode'              => strtoupper($request -> for_kode),
                'jenis_barang'      => $request -> for_jenis_kategory,
                'kemasang_barang'   => $request -> for_kemasan,
                'id_kategory'       => 0,
                'id_gudang'         => 0,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => Auth::user()->id,
            ]);
    
            if($insert) {
                return redirect()->route('master-kategory')
                ->with('success', 'berhasil tambah kategory barang');
            }
        }
        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('master-kategory-tambah')
            ->with('danger', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         // $barang = MasterBarangModel::where(['id' => $id])->first();
         $kategory = DB::select(
            "SELECT
                mba.*,
                u1.name as dibuat_nama, u1.email as dibuat_email,
                u2.name as diperbarui_nama, u2.email as diperbarui_email
                FROM master_kategory as mba
                LEFT JOIN users as u1 ON mba.dibuat_oleh = u1.id
                LEFT JOIN users as u2 ON mba.diperbarui_oleh = u2.id
                WHERE mba.id = ?;",
                [$id]
        );

        return view('master/kategory/show-data-kategory', compact ('kategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = DB::select(
            "SELECT
                mba.*,
                u1.name as dibuat_nama, u1.email as dibuat_email,
                u2.name as diperbarui_nama, u2.email as diperbarui_email
                FROM master_kategory as mba
                LEFT JOIN users as u1 ON mba.dibuat_oleh = u1.id
                LEFT JOIN users as u2 ON mba.diperbarui_oleh = u2.id
                WHERE mba.id = ?;",
                [$id]
        );
        return view ('master/kategory/form-edit-kategory', compact ('barang'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aturan = 
        [
            'for_jenis_barang' => 'required|min:3|max:50',
            'for_kemasan' => 'required',
        ];

        $messages =  
        [
             'required' => 'Wajib Diisi',   
             'min' => 'minimal :min karakter',
             'max' => 'maksimal :max karakter',
             'unique' => 'Tidak Boleh sama bos!',

        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        
        // jika validasi gagal maka kembali ke form edit
        if($validator->fails()){
            return redirect()
            ->route('master-kategory-edit',$id)
            ->withErrors($validator)->withInput();
        }else{
            // jika inputan user berhasil
            // update ke database
            $update = MasterKategoryModel:: where('id', $id)->update([
                'jenis_barang'              => $request -> for_jenis_barang,
                'kemasang_barang'         => $request -> for_kemasan,
                'diperbarui_oleh'   => Auth::user()->id,
                'diperbarui_kapan'  => date('Y-m-d H:i:s'),
            ]);
    
            if($update) {
                return redirect()->route('master-kategory')
                ->with('success', 'berhasil update kategory');
            }
        }
        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('master-kategory-edit', $id)
            ->with('danger', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_kategory)
    {
        try {
            $update = MasterKategoryModel::
            where(['id' => $id_kategory])->update([
                'status' => 0,
            ]);
    
            if($update) {
                return redirect()
                ->route('master-kategory')
                ->with('success', 'berhasil menghapus kategory');
            }
        }
        catch (\Throwable $th) 
        { 
            return redirect()
            ->route('master-kategory')
            ->with('danger', $th->getMessage());
        }
    }
}
