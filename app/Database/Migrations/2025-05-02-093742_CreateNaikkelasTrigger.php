<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNaikkelasTrigger extends Migration
{
    public function up()
    {
        $this->db->query("
            CREATE TRIGGER before_update_siswa 
            BEFORE UPDATE ON siswa 
            FOR EACH ROW 
            BEGIN
                -- Cek apakah kolom kelas atau semester berubah
                IF OLD.kelas != NEW.kelas OR OLD.semester != NEW.semester THEN

                    -- Pindahkan data nilai lama ke riwayat_nilai
                    INSERT INTO riwayat_nilai (
                        id_siswa,
                        mata_pelajaran,
                        kelas,
                        semester,
                        ph1, ph2, ph3, ph4, ph5, ph6, ph7, ph8, ph9, ph10,
                        ti1, ti2, ti3, ti4, ti5,
                        tk1, tk2, tk3,
                        uts, uas,
                        rata_rata
                    )
                    SELECT 
                        id_siswa,
                        mata_pelajaran,
                        kelas,
                        semester,
                        ph1, ph2, ph3, ph4, ph5, ph6, ph7, ph8, ph9, ph10,
                        ti1, ti2, ti3, ti4, ti5,
                        tk1, tk2, tk3,
                        uts, uas,
                        rata_rata
                    FROM nilai
                    WHERE id_siswa = OLD.id
                      AND kelas = OLD.kelas
                      AND semester = OLD.semester;

                    -- Hapus nilai lama dari tabel nilai
                    DELETE FROM nilai
                    WHERE id_siswa = OLD.id
                      AND kelas = OLD.kelas
                      AND semester = OLD.semester;

                END IF;
            END;
        ");
    }

    public function down()
    {
        $this->db->query("DROP TRIGGER IF EXISTS before_update_siswa;");
    }
}
