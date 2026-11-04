<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $roleSuper = Role::where('name', 'kesekretariatan')->first();
        $roleMiba = Role::where('name', 'MIBA')->first();

        // 1. Akun Super Admin (Akses ke semua: /superadmin dan /admin)
        $superAdmin = User::firstOrCreate(
            ['email' => 'superadmin@himatika.org'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'),
            ]
        );
        $superAdmin->roles()->syncWithoutDetaching([$roleSuper->id, $roleMiba->id]);

        // 2. Akun Admin MIBA (Akses ke /admin)
        $adminMiba = User::firstOrCreate(
            ['email' => 'admin@himatika.org'],
            [
                'name' => 'Admin MIBA',
                'password' => Hash::make('password123'),
            ]
        );
        $adminMiba->roles()->syncWithoutDetaching([$roleMiba->id]);
    }
}
