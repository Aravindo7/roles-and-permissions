<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AsignRoleToUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $users = User::with('roles')->get();
        return view(
            'admin.assign_user_roles.list',
            compact('users')

        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        $roles  = Role::get();
        return view(
            'admin.assign_user_roles.create',
            compact('users', 'roles')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        $user = User::find($request->user_id);
        //$role = Role::find($request->role_id);
        $user->syncRoles($request->role_names);
        return redirect()->back()->with('Message', " Assigned to $user->email  Sucessfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return $id;
        $users = User::get();
        $roles  = Role::get();
        $selecteduser = User::with('roles')->find($id);
        // dd($selecteduser);
        // exit();
        return view(
            'admin.assign_user_roles.edit',
            compact('users', 'roles', 'selecteduser')
        );
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
        $user = User::find($id);
        //$role = Role::find($request->role_id);

        //$user->sync($role->name);
        $user->syncRoles($request->role_id);
        return redirect()->back()->with('Message', "Role Updated to $user->email  Sucessfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
