<?php


namespace App\Database\Seeds;

class MahasiswaSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'NPM' => '2107051001',
                'nama' => 'John Doe',
                'alamat' => 'Jl. Jalan No. 1',
            ],
            [
                'NPM' => '2017051002',
                'nama' => 'Jane Doe',
                'alamat' => 'Jl. Jalan No. 2',
            ],
            [
                'NPM' => '2017051003',
                'nama' => 'John Doe 2',
                'alamat' => 'Jl. Jalan No. 3',
            ],
            [
                'NPM' => '2017051004',
                'nama' => 'Jane Doe 2',
                'alamat' => 'Jl. Jalan No. 4',
            ]
        ];
        $this->db->table('mahasiswas')->insertBatch($data);
    }
}

?>
