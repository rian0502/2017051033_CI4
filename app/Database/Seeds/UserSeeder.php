<?php

namespace App\Database\Seeds;


use App\Models\Users;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $users = new Users();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'username' => $faker->name,
                'email' => $faker->email,
                'password' => password_hash('admin', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

            ];
            $users->insert($data);
        }
    }
}
