<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswas extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'NPM' => [
                'type' => 'CHAR',
                'constraint' => '100',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],202
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mahasiswas');
    }

    public function down()
    {
        //
        $this->forge->dropTable('mahasiswas');
    }
}
