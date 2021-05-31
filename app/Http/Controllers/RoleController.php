<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $permissions = Permission::all();

        return view('admin.roles.index', compact('permissions'));
    }

    public function edit($id){
        $role=Role::find($id);
        return view('admin.roles.edit', compact('role'));
    }

}
