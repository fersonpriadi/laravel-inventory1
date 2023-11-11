<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AddUserController extends Controller
{
    public function index(){
        return view('users/add-user');
    }

    public function store(Request $request)
    {   
        $aturan = 
        [
            'for_nama_user' => 'required|max:10|alpha_dash|unique:users,name',
            'for_email_user' => 'required|unique:users,email',
            'for_status_user' => 'required',
            'for_password' => 'required',
        ];

        $messages =  
        [
             'required' => 'Wajib Diisi',   
             'min' => 'minimal :min karakter',
             'max' => 'maksimal :max karakter',
             'unique' => 'Tidak boleh ada yang sama',

        ];

        $validator = Validator::make($request->all(), $aturan, $messages);

       try {
        
        if($validator->fails()){
            return redirect()
            ->route('add-user')
            ->withErrors($validator)
            ->withInput();
        }else{
            $insert = User::create([
                'name'              => strtoupper($request -> for_nama_user),
                'status'            => $request -> for_status_user,
                'email'             => $request -> for_email_user,
                'password'          => $request -> for_password,
                'remember_token'    => 0,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => Auth::user()->id,
            ]);
    
            if($insert) {
                return redirect()->route('add-user')
                ->with('success', 'berhasil tambah user baru');
            }
        }
        }catch (\Throwable $th) 
        { 
            return redirect()
            ->route('add-user')
            ->with('danger', $th->getMessage());
        }
    }

}
