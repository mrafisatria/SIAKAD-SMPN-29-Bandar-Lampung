<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRiwayatnilaiakhirTable extends Migration
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
                'constraint' => 50,
                'null'       => true,
            ],
            'semester'     => [
                'type' => 'INT',
                'null' => true,
            ],
            'nilai_akhir'  => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id', true); // Primary Key
        $this->forge->addUniqueKey(['id_siswa', 'kelas', 'semester'], 'unique_siswa_kelas_semester'); // Unique Key
        $this->forge->addForeignKey('id_siswa', 'siswa', 'id', 'CASCADE', 'CASCADE'); // Foreign Key

        $this->forge->createTable('riwayat_nilai_akhir');
    }

    public function down()
    {
        $this->forge->dropTable('riwayat_nilai_akhir');
    }
}
