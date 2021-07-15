<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear roles
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Operativo']);

        $permission = Permission::create(['name' => 'users.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'users.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'users.update'])->syncRoles([$role1]);


        // $permission = Permission::create(['name' => 'articulo.index'])->syncRoles([$role1, $role2]);
        // $permission = Permission::create(['name' => 'articulo.create'])->syncRoles([$role1]);
        // $permission = Permission::create(['name' => 'articulo.edit'])->syncRoles([$role1, $role2]);

    }
}
