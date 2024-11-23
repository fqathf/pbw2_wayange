<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Akun;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Akun::create([
            'email' => 'wayange.asli@gmail.com',
            'username' => 'wayangeasli',
            'password' => bcrypt('123'),
            'id_r' => 1
        ]);
        $user->assignRole("Admin");
        // $user->assignRole([1]);
        $users = Akun::create([
            'email' => 'wayange.asli2@gmail.com',
            'username' => 'wayangeasli',
            'password' => bcrypt('123'),
            'id_r' => 2
        ]);
        $users->assignRole("User");
        // $users->assignRole([2]); 
    }
}
