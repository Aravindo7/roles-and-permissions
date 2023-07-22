<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Permission; 
use Spatie\Permission\Models\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo'--------------------------------------'."\n";
       echo'---------Role Seeding------'."\n";
        $role = new Role();
        $role->name ='Super Admin';
        $role->save();
        echo'-------Role Addded=>$role->name-------------------------------'."\n";
        echo'--------------------------------------'."\n";
       echo'---------Assingning All Permission to'.$role->name.'------'."\n";

       $permissions = Permission::get();
       foreach ($permissions as $key => $value) {
        $role->givePermissionTo($value->name);
       }
       echo'--------------------------------------'."\n";
       echo'---------Role Seeding Completed------'."\n";
    }
}
