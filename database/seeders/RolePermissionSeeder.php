<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Permissions
        $permissions = [
            'add',
            'view',
            'update',
            'delete',
            'edit',
            'view students',
            'view own profile',
            'edit own profile',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        // Roles
        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $teacher = Role::firstOrCreate([
            'name' => 'teacher',
            'guard_name' => 'web',
        ]);

        $student = Role::firstOrCreate([
            'name' => 'student',
            'guard_name' => 'web',
        ]);

        // Admin Permissions
        $admin->syncPermissions([
            'add',
            'view',
            'update',
            'delete',
            'edit',
            'view own profile',
            'edit own profile',
        ]);

        // Teacher Permissions
        $teacher->syncPermissions([
            'view students',
            'view own profile',
            'edit own profile',
        ]);

        // Student Permissions
        $student->syncPermissions([
            'view own profile',
            'edit own profile',
        ]);
    }
}