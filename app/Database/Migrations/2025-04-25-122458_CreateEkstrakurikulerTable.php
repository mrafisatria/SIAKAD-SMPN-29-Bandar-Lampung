<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEkstrakurikulerTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=> 'INT',
                'constraint'=> 255,
                'unsigned'=> true,
                'auto_increment'=>true,
            ],
            'nama'=>[
                'type'=> 'VARCHAR',
                'constraint'=> 255,
                'null'=> false,
            ],
            'warna'=>[
                'type'=> 'VARCHAR',
                'constraint'=> 255,
                'null'=> false,
            ],
            'created_at'=>[
                'type'=> 'DATETIME',
                'null'=> true,
            ],
            'edited_at'=>[
                'type'=> 'DATETIME',
                'null'=> true,
            ],
            'deleted_at'=>[
                'type'=> 'DATETIME',
                'null'=> true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ekstrakurikuler');
    }

    public function down()
    {
        $this->forge->dropTable('ekstrakurikuler');
    }
}
