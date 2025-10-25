<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGalerikegiatanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'foto' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'judul' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'isi' =>[
                'type' => 'TEXT',
                'null' => false,
            ],
            'tanggal' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('galerikegiatan');
    }

    public function down()
    {
        $this->forge->dropTable('galerikegiatan');
    }
}
