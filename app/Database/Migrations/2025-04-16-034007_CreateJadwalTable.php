<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwalTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'kelas'      => [
                'type'       => 'VARCHAR',
                'constraint' => '10'
            ],
            'hari'       => [
                'type'       => 'VARCHAR',
                'constraint' => '15'
            ],
            'mapel1'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'mapel2'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'mapel3'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'mapel4'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'mapel5'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'mapel6'      => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal');
    }
}
