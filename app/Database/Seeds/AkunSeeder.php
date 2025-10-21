<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AkunSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'enjelitaaininatasyaa@gmail.com',
                'username' => 'enjelitaaininatasyaaadmin',
                'password_hash' => password_hash('enjelitaaininatasyaaadmin123', PASSWORD_DEFAULT),
                'active' => 1,
                'force_pass_reset' => 0,
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
