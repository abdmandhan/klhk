<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //  create permissions
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'superadmin']);

        $roles = Role::create(['name' => 'admin'])
            ->givePermissionTo(['admin']);

        $roles = Role::create(['name' => 'superadmin'])
            ->givePermissionTo(['superadmin']);

        // $role = Role::create(['name' => 'superadmin']);
        // $role->givePermissionTo(Permission::all());
    }
}
