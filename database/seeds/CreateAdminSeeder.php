<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // Cek atau buat user admin
        $user = \App\Models\User::firstOrCreate(
        ['email' => 'admin@asdp.com'],
        [
            'name' => 'admin',
            'password' => bcrypt('123456'),
        ]
        );

        // Cek atau buat role admin
        $role = Role::firstOrCreate(['name' => 'admin']);

        // Ambil semua permission & assign ke role
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);

        // Assign role ke user kalau belum ada
        if (!$user->hasRole($role->name)) {
        $user->assignRole($role);
        }
    }
}
