<?php


namespace App\Database\Seeds;

class MahasiswaSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'NPM' => '2107051001',
                'nama' => 'Alex Telles',
                'alamat' => 'Jl. Jalan No. 1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'NPM' => '2017051002',
                'nama' => 'Jane So Min',
                'alamat' => 'Jl. Jalan No. 2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'NPM' => '2017051003',
                'nama' => 'Harry Maguire',
                'alamat' => 'Jl. Jalan No. 3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'NPM' => '2017051004',
                'nama' => 'Bruno Fernandes',
                'alamat' => 'Jl. Jalan No. 4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];
        $this->db->table('mahasiswas')->insertBatch($data);
    }
}

?>
