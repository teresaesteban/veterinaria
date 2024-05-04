<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


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
