<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNilaiToNilaiakhirTrigger extends Migration
{
    public function up()
    {
        // AFTER INSERT trigger
        $this->db->query("
            CREATE TRIGGER after_insert_nilai
            AFTER INSERT ON nilai
            FOR EACH ROW
            BEGIN
                DECLARE total_rata DECIMAL(5,2) DEFAULT 0;
                DECLARE count_mapel INT DEFAULT 0;

                SELECT COALESCE(SUM(rata_rata), 0), COUNT(*)
                INTO total_rata, count_mapel
                FROM nilai
                WHERE id_siswa = NEW.id_siswa AND kelas = NEW.kelas AND semester = NEW.semester;

                INSERT INTO nilai_akhir (id_siswa, kelas, semester, nilai_akhir)
                VALUES (
                    NEW.id_siswa, NEW.kelas, NEW.semester,
                    IF(count_mapel > 0, total_rata / count_mapel, 0)
                )
                ON DUPLICATE KEY UPDATE
                    nilai_akhir = IF(count_mapel > 0, total_rata / count_mapel, 0);
            END;
            ");

        // AFTER UPDATE trigger
        $this->db->query("
            CREATE TRIGGER after_update_nilai
            AFTER UPDATE ON nilai
            FOR EACH ROW
            BEGIN
                DECLARE total_rata DECIMAL(5,2) DEFAULT 0;
                DECLARE count_mapel INT DEFAULT 0;

                SELECT COALESCE(SUM(rata_rata), 0), COUNT(*)
                INTO total_rata, count_mapel
                FROM nilai
                WHERE id_siswa = NEW.id_siswa AND kelas = NEW.kelas AND semester = NEW.semester;

                INSERT INTO nilai_akhir (id_siswa, kelas, semester, nilai_akhir)
                VALUES (
                    NEW.id_siswa, NEW.kelas, NEW.semester,
                    IF(count_mapel > 0, total_rata / count_mapel, 0)
                )
                ON DUPLICATE KEY UPDATE
                    nilai_akhir = IF(count_mapel > 0, total_rata / count_mapel, 0);
            END;
            ");

        // AFTER DELETE trigger
        $this->db->query("
            CREATE TRIGGER after_delete_nilai
            AFTER DELETE ON nilai
            FOR EACH ROW
            BEGIN
                DECLARE total_rata DECIMAL(5,2) DEFAULT 0;
                DECLARE count_mapel INT DEFAULT 0;

                SELECT COALESCE(SUM(rata_rata), 0), COUNT(*)
                INTO total_rata, count_mapel
                FROM nilai
                WHERE id_siswa = OLD.id_siswa AND kelas = OLD.kelas AND semester = OLD.semester;

                IF count_mapel > 0 THEN
                    INSERT INTO nilai_akhir (id_siswa, kelas, semester, nilai_akhir)
                    VALUES (
                        OLD.id_siswa, OLD.kelas, OLD.semester,
                        total_rata / count_mapel
                    )
                    ON DUPLICATE KEY UPDATE
                        nilai_akhir = total_rata / count_mapel;
                ELSE
                    DELETE FROM nilai_akhir
                    WHERE id_siswa = OLD.id_siswa AND kelas = OLD.kelas AND semester = OLD.semester;
                END IF;
            END;
            ");
    }

    public function down()
    {
        $this->db->query("DROP TRIGGER IF EXISTS after_insert_nilai");
        $this->db->query("DROP TRIGGER IF EXISTS after_update_nilai");
        $this->db->query("DROP TRIGGER IF EXISTS after_delete_nilai");
    }
}
