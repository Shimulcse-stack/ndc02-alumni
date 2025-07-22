<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Create permissions
        $storeData = Permission::firstOrCreate(['name' => 'store data']);
        $editData = Permission::firstOrCreate(['name' => 'edit data']);
        $destroyData = Permission::firstOrCreate(['name' => 'destroy data']);
        $suspendData = Permission::firstOrCreate(['name' => 'suspend data']);

       // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $memberRole = Role::firstOrCreate(['name' => 'member']);

        // Assign permissions to roles
        $adminRole->givePermissionTo([$storeData, $editData, $destroyData, $suspendData]);
        $memberRole->givePermissionTo([$storeData]);
    }
}