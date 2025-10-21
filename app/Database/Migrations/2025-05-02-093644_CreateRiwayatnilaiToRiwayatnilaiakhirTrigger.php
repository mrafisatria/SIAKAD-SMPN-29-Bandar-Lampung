<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRiwayatnilaiToRiwayatnilaiakhirTrigger extends Migration
{
    public function up()
    {
        $this->db->query("
            CREATE TRIGGER after_insert_riwayat_nilai 
            AFTER INSERT ON riwayat_nilai 
            FOR EACH ROW 
            BEGIN
                DECLARE total_rata DECIMAL(5,2) DEFAULT 0;
                DECLARE count_mata_pelajaran INT DEFAULT 0;

                SELECT COALESCE(SUM(rata_rata), 0), COUNT(*) 
                INTO total_rata, count_mata_pelajaran
                FROM riwayat_nilai
                WHERE id_siswa = NEW.id_siswa 
                  AND kelas = NEW.kelas 
                  AND semester = NEW.semester;

                INSERT INTO riwayat_nilai_akhir (id_siswa, kelas, semester, nilai_akhir)
                VALUES (NEW.id_siswa, NEW.kelas, NEW.semester, 
                        IF(count_mata_pelajaran > 0, total_rata / count_mata_pelajaran, 0))
                ON DUPLICATE KEY UPDATE 
                    nilai_akhir = IF(count_mata_pelajaran > 0, total_rata / count_mata_pelajaran, 0);
            END;
        ");
    }

    public function down()
    {
        $this->db->query("DROP TRIGGER IF EXISTS after_insert_riwayat_nilai;");
    }
}
