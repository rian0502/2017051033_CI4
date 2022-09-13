<?php


namespace App\Database\Seeds;

use App\Models\Mahasiswa;

class MahasiswaSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
       $mahasiswa = new Mahasiswa();
       $faker = \Faker\Factory::create();
       for ($i = 0; $i < 20; $i++) {
           $data = [
               'nama' => $faker->name,
               'NPM' => $faker->numberBetween(1000000000, 9999999999),
               'alamat' => $faker->address,
               'image' => 'default.jpg',
               'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

           ];
           $mahasiswa->insert($data);
       }
    }
}

?>
