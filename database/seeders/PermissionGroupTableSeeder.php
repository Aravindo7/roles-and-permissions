<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $permissionGroups = [
        [
            'name'  => 'Country'
        ],
        [
            'name'  => 'State'
        ]
       ];
       echo'--------------------------------------'."\n";
       echo'---------Permission Group Seeding------'."\n";
       foreach ($permissionGroups as $key => $value) {
        $permissionGroup = new PermissionGroup();
        $permissionGroup->name = $value['name']; // Set the 'name' attribute
        $permissionGroup->save();
        echo '------Permission Group Name=>' . $permissionGroup->name . "--------------------------------\n";
    }    
       echo'--------Permission Group Seeding Completed------------------------------'."\n";
    }
}