<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'cliente']);

        $permission = Permission::create(['name' => 'cuentas.index'])->assignRole($role1);

        $permission = Permission::create(['name' => 'web.transactions'])->syncRoles([$role2, $role1]);
        $permission = Permission::create(['name' => 'web.transactions.deposit'])->syncRoles([$role2, $role1]);
        $permission = Permission::create(['name' => 'web.transactions.withdraw'])->syncRoles([$role2, $role1]);
        $permission = Permission::create(['name' => 'web.transactions.transfer'])->syncRoles([$role2, $role1]);
        $permission = Permission::create(['name' => 'web.transactions.history'])->syncRoles([$role2, $role1]);

        $permission = Permission::create(['name' => 'web.pago_servicios'])->syncRoles([$role2, $role1]);
    }
}
