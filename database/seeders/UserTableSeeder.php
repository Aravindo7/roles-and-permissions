<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo '--------------------------------------' . "\n";
        echo '---------User Seeding------' . "\n";
        $user = new User;
        $user->name = 'Super Admin';
        $user->email = 'Superadmin@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
        echo '---------User Created-----------------------------' . "\n";
        echo '--------------------------------------' . "\n";
        echo '---------Assigning Super Admin role to =>'.$user->email.'------'."\n";

        $superAdminRole = Role::where('name', 'Super Admin')->first();
        $user->assignRole($superAdminRole);
        echo '---------Assigning Super Admin role to =>'.$user->email.'---Completed----'."\n";
        echo '---------User Seeding------' . "\n";
    }
}


