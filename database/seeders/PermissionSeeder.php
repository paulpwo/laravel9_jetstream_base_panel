<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //Some initially role configuration
        $roles = [
            'SuperAdmin' => [
                'view users',
                'create users',
                'update users',
                'delete users',
            ],
            'Admin' => [
                'view users',
                'create users',
                'update users',
            ],
            'Editor' => [
                'view users',
                'create users',
                'update users'
            ],
            'Member' => [
                'view users'
            ]
        ];

        collect($roles)->each(function ($permissions, $role) {
            $role = Role::findOrCreate($role);
            collect($permissions)->each(function ($permission) use ($role) {
                $role->permissions()->save(Permission::findOrCreate($permission));
            });
        });
    }
}