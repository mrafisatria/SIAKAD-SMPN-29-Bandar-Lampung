<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiswaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nisn'         => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'unique'     => true,
            ],
            'nama'         => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'kelas'        => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'semester'        => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'jeniskelamin'=> [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'alamat'       => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'wali'    => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'nowali'   => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],
            'created_at'   => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at'   => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'deleted_at'   => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
