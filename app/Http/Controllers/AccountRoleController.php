<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class AccountRoleController extends Controller
{
    
    public function index()
    {
        $role = Role::all();
        return view('account/role/index', compact('role'));
    }

  
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show(string $id)
    {
        $role = DB::select(
            "SELECT
                ro.*,
                u1.name as dibuat_nama, u1.email as dibuat_email,
                u2.name as diperbarui_nama, u2.email as diperbarui_email
                FROM roles as ro
                LEFT JOIN users as u1 ON ro.dibuat_oleh = u1.id
                LEFT JOIN users as u2 ON ro.diperbarui_oleh = u2.id
                WHERE ro.id = ?;",
                [$id]
        );
        return view('account/role/role-detail', compact ('role'));
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
