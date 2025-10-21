<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNilaiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_siswa'       => [
                'type'     => 'INT',
                'unsigned' => true,
            ],
            'mata_pelajaran' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'kelas'          => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'semester'       => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],

            // Bobot fleksibel
            'bobot_kognitif' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'default'    => 0.6,
            ],
            'bobot_uas' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'default'    => 0.4,
            ],

            // Penilaian Harian (PH)
            'ph1'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph2'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph3'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph4'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph5'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph6'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph7'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph8'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph9'  => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ph10' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],

            // Tugas Individu (TI)
            'ti1' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ti2' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ti3' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ti4' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'ti5' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],

            // Tugas Kelompok (TK)
            'tk1' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'tk2' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'tk3' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],

            // UTS & UAS
            'uts' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
            'uas' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],

            // Rata-rata
            'rata_rata' => ['type' => 'DECIMAL', 'constraint' => '5,2', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_siswa', 'siswa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('nilai');
    }

    public function down()
    {
        $this->forge->dropTable('nilai');
    }
}
