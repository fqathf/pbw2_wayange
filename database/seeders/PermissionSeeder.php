<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat permission 'all-access' jika belum ada
        // $permission = Permission::firstOrCreate(['name' => 'all-access', 'guard_name' => 'web']);
        // Permission::firstOrCreate(['name' => 'wayang-create', 'guard_name' => 'web']);
        // Permission::firstOrCreate(['name' => 'wayang-list', 'guard_name' => 'web']);
        // Permission::firstOrCreate(['name' => 'wayang-update', 'guard_name' => 'web']);
        // Permission::firstOrCreate(['name' => 'wayang-delete', 'guard_name' => 'web']);

        $permission = Permission::firstOrCreate(['name' => 'all-access', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'limit-access', 'guard_name' => 'web']);
    }
}