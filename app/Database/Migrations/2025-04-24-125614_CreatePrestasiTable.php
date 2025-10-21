<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePrestasiTable extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id'=>[
                'type'=> 'INT',
                'constraint'=> 255,
                'unsign'=> true,
                'auto_increment'=> true,
            ],
            'tanggal' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'foto' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'judul'=>[
                'type'=> 'VARCHAR',
                'constraint'=> 255,
                'null'=> false,
            ],
            'isi'=>[
                'type'=> 'TEXT',
                'null'=> false,
            ],
            'perwakilan'=>[
                'type'=> 'VARCHAR',
                'constraint'=> 255,
                'null'=> false,
            ],
            'created_at'=>[
                'type'=> 'DATETIME',
                'null'=> true,
            ],
            'updated_at'=>[
                'type'=> 'DATETIME',
                'null'=> true,
            ],
            'deleted_at'=>[
                'type'=> 'DATETIME',
                'null'=> true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('prestasi');
    }

    public function down()
    {
        $this->forge->dropTable('prestasi');
    }
}
