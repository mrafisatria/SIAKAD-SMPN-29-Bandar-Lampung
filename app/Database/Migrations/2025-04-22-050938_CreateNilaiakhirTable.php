<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNilaiakhirTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_siswa'     => [
                'type'     => 'INT',
                'unsigned' => true,
                'null'     => true,
            ],
            'kelas'        => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'null'       => true,
            ],
            'semester'     => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
                'null'       => true,
            ],
            'nilai_akhir'  => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->addUniqueKey(['id_siswa', 'kelas', 'semester'], 'unik_nilai_akhir'); // Unique key 2 with name

        $this->forge->addForeignKey('id_siswa', 'siswa', 'id', 'CASCADE', 'CASCADE'); // Foreign key

        $this->forge->createTable('nilai_akhir');
    }

    public function down()
    {
        $this->forge->dropTable('nilai_akhir');
    }
}
