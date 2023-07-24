<?php

namespace App\Http\Controllers;

use App\Models\PermissionGroup;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::with('permissions')->get();

        return view('admin.roles.list', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return $PermissionGroups = PermissionGroup::with('permissions')->get();
        $PermissionGroups = PermissionGroup::with('permissions')->get();
        //   dd($PermissionGroups);
        //   exit();
        return view('admin.roles.create', compact('PermissionGroups'));
        // return'Aravind';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        // dd($request);
        //exit();
        $role = new Role;
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->permission_ids);
        return redirect()->back()->with('Message', 'Role Was created With Selected Permission Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::with('permissions')->find($id);
        $PermissionGroups = PermissionGroup::with('permissions')->get();
        return view('admin.roles.edit', compact('role', 'PermissionGroups'));
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
        //return $request;
        // dd($request);
        // exit();
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->permission_ids);
        return redirect()->back()->with('Message', 'Role Was Updated With Selected Permission Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return $id;
        $role = Role::find($id);
        $role->delete;
        //it will delete multiple permssion ids in the table of role has permission
        $role->syncPermissions();
        return redirect()->back()->with('Message', 'Role Deleted Sucessfully');
    }
}
