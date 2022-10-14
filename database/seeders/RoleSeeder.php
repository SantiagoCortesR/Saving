<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Super Administrador']);
        $role2 = Role::create(['name' => 'Administrador']);
        $role3 = Role::create(['name' => 'Ahorrador']);

        Permission::create(['name' => 'register'])->syncRoles($role1);
        Permission::create(['name' => 'dashboard'])->syncRoles($role2, $role3);
        Permission::create(['name' => 'test'])->assignRole($role2);
        Permission::create(['name' => 'products'])->assignRole($role3);
    }
}
