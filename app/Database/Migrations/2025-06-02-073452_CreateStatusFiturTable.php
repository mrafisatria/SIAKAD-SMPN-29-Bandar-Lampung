<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStatusFiturTable extends Migration
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
            'fitur'=>[
                'type'=> 'VARCHAR',
                'constraint'=> 255,
                'null'=> false,
            ],
            'status' => [
                'type' => 'BOOLEAN',
                'default' => false,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('statusfitur');
    }

    public function down()
    {
        $this->forge->dropTable('statusfitur');
    }
}
