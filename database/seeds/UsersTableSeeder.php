<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // usuario con el rol vendedor
        $vendedor = User::create([
            'name' => 'vendedor',
            'email' => 'vendedor@gmail.com',
            'password' => '12345678'
        ]);

        $vendedor->assignRole('vendedor');


        // usuario con el rol super-admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678'
        ]);

        $admin->assignRole('super-admin');
    }
}
