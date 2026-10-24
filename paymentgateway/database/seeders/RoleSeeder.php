<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Super Admin',
            'Admin Website',
            'Customer',
            'Staff Design',
            'Staff Printing',
            'Staff Cutting',
            'Staff Jahit',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        // Example Super Admin user
        $superAdmin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Super Admin User',
                'password' => bcrypt('password'),
            ]
        );
        $superAdmin->assignRole('Super Admin');
        
        // Example Staff Design user
        $staffDesign = \App\Models\User::firstOrCreate(
            ['email' => 'design@example.com'],
            [
                'name' => 'Staff Design User',
                'password' => bcrypt('password'),
            ]
        );
        $staffDesign->assignRole('Staff Design');
    }
}
