<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(
            ['name' => 'kesekretariatan'],
            ['description' => 'Role Super Admin (Kesekretariatan)']
        );

        Role::firstOrCreate(
            ['name' => 'MIBA'],
            ['description' => 'Role Admin (Minat dan Bakat)']
        );
    }
}
