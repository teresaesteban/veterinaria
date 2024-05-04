<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        $role1 = Role::create(['name' => 'employee']);
        $role2 = Role::create(['name' => 'user']);

        // Crear usuarios y asignarles roles
        $user1 = User::factory()->create([
            'name' => 'Employee User',
            'email' => 'employee@gmail.com',
            'password' => bcrypt('employee123'),
        ]);
        $user1->assignRole($role1);

        $user2 = User::factory()->create([
            'name' => 'Normal User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
        ]);
        $user2->assignRole($role2);
    }
}
