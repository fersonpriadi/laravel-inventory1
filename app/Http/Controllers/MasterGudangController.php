<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Models\MasterBarangModel;
use App\Models\MasterGudangModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use function League\Flysystem\Local\delete;
use Illuminate\Database\Eloquent\forceDelete;

class MasterGudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = MasterGudangModel::where('status', 1) -> get();
        return view('master/gudang/index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = MasterBarangModel::where('status', 1) -> get();
        return view('master/gudang/form-tambah-gudang', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aturan = 
        [
            'for_kode_gudang' => 'required|min:5|max:7',
            'for_area' => 'required',
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
            ->route('tambah-data-gudang')
            ->withErrors($validator)->withInput();
        }else{
            $insert = MasterGudangModel::create([
                'kode_barang'           => strtoupper($request -> form_barang_to_gudang),
                'kode_gudang'           => $request -> for_kode_gudang,
                'area'                  => $request -> for_area,
                'tempat'                => $request -> for_tempat,
                'dibuat_oleh'           => Auth::user()->id,
                'dibuat_kapan'          => date('Y-m-d H:i:s'),
                'diperbarui_kapan'      => 1,
                'diperbarui_oleh'       => 0,
            ]);
    
            if($insert) {
                return redirect()->route('master-gudang')
                ->with('success', 'berhasil tambah gudang');
            }
        }
        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('tambah-data-gudang')
            ->with('danger', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_barang)
    {
        try {
                $update = MasterGudangModel::
                where(['id' => $id_barang])->update([
                    'status' => 0,
                ]);
        
                if($update) {
                    return redirect()
                    ->route('master-gudang')
                    ->with('success', 'berhasil menghapus item gudang');
                }
            }
            catch (\Throwable $th) 
            { 
                return redirect()
                ->route('tambah-data-gudang')
                ->with('danger', $th->getMessage());
            }
        
    }
}
