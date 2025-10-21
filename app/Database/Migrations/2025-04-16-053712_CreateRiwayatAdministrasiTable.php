<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRiwayatAdministrasiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_siswa'       => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => false
            ],
            'pembayaran_ke'  => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'tanggal'        => [
                'type' => 'DATETIME',
                'null' => false
            ],
            'nominal'        => [
                'type'       => 'BIGINT',
                'constraint' => 20
            ],
            'tanggaldiubah'  => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'created_at'     => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at'     => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at'     => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_siswa', 'siswa', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('riwayat_administrasi');
    }

    public function down()
    {
        $this->forge->dropTable('riwayat_administrasi');
    }
}
