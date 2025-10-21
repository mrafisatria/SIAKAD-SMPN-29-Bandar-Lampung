<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePegawaiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => [
                'type'           => 'INT',
                'unsigned'      => true,
                'auto_increment' => true,
            ],
            'nama'             => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jabatan'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nip'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
                'null'           => true,  // NIP optional, untuk pegawai non-PNS
            ],
            'jenis_kelamin'    => [
                'type'           => 'ENUM',
                'constraint'     => ['Laki-Laki', 'Perempuan'],
            ],
            'alamat'           => [
                'type'           => 'TEXT',
            ],
            'no_telepon'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'email'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'status_kepegawaian' => [
                'type'           => 'ENUM',
                'constraint'     => ['PNS', 'Honorer', 'Kontrak'],
            ],
            'deleted_at'       => [
                'type'           => 'DATETIME',
                'null'           => true,  // optional, jika ada data yang dihapus
            ],
        ]);

        $this->forge->addKey('id');
        $this->forge->createTable('pegawai');
    }

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
