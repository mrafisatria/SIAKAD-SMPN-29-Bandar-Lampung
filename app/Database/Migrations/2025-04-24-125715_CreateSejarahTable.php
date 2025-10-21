<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSejarahTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
               'type' => 'int',
               'constraint' => 255,
               'unsigned' => true,
               'auto_increment' => true,
            ],
            'sejarahkepemimpinan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'update_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id','true');
        $this->forge->createTable('sejarah');
    }

    public function down()
    {
        $this->forge->dropTable('sejarah');
    }
}
