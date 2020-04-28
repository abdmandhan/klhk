<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Closure;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function handle($request, Closure $next, ...$roles)
    // {
    //     if (in_array($request->user()->role, $roles)) {
    //         return $next($request);
    //     }
    //     return redirect('/');
    // }
    public function run()
    {
        // Reset cached roles and permissions
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //  create permissions
        Permission::create(['role' => 'admin']);
        Permission::create(['role' => 'superadmin']);
        Permission::create(['role' => 'user']);


        // // create roles and assign created permissions

        // // this can be done as separate statements
        // $role = Role::create(['name' => 'writer']);
        // $role->givePermissionTo('edit articles');

        // or may be done by chaining
        $roles = Role::create(['role' => 'admin'])
            ->givePermissionTo(['publish dashboard', 'publish web', 'publish Manajemen Web utama', 'publish web_monitoring', 'unpublish admin']);
        $roles = Role::create(['role' => 'superadmin'])
            ->givePermissionTo(['publish dashboard', 'publish Manajemen Akun', 'publish Daftar Web', 'publish web_monitoring']);
        $roles = Role::create(['role' => 'user'])
            ->givePermissionTo(['publish dashboard', 'publish Manajemen Web utama', 'publish web_monitoring']);
        // $role = Role::create(['name' => 'super-admin']);
        // $role->givePermissionTo(Permission::all());
    }
}
