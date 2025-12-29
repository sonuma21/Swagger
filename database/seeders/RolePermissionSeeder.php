<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::where('name', 'admin')->first();
        $editor = Role::where('name', 'editor')->first();

        $admin->givePermissionTo(Permission::all());
        $editor->givePermissionTo([
            'view-events',
            'view-event',
            'create-event',
            'update-event',
            'delete-event',

        ]);
    }
}
