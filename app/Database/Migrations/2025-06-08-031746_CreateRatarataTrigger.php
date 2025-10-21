<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRatarataTrigger extends Migration
{
    public function up()
    {
        // Trigger BEFORE INSERT
        $this->db->query("
        CREATE TRIGGER hitung_rata_rata_sebelum_insert
            BEFORE INSERT ON nilai
            FOR EACH ROW
            BEGIN
                DECLARE rata_ph DECIMAL(5,2);
                DECLARE rata_ti DECIMAL(5,2);
                DECLARE rata_tk DECIMAL(5,2);
                DECLARE rata_kognitif DECIMAL(5,2);
                DECLARE jml_ph INT;
                DECLARE jml_ti INT;
                DECLARE jml_tk INT;

                SET jml_ph = IF(NEW.ph1 IS NOT NULL AND NEW.ph1 != 0,1,0) + IF(NEW.ph2 IS NOT NULL AND NEW.ph2 != 0,1,0) + IF(NEW.ph3 IS NOT NULL AND NEW.ph3 != 0,1,0) +
                             IF(NEW.ph4 IS NOT NULL AND NEW.ph4 != 0,1,0) + IF(NEW.ph5 IS NOT NULL AND NEW.ph5 != 0,1,0) + IF(NEW.ph6 IS NOT NULL AND NEW.ph6 != 0,1,0) +
                             IF(NEW.ph7 IS NOT NULL AND NEW.ph7 != 0,1,0) + IF(NEW.ph8 IS NOT NULL AND NEW.ph8 != 0,1,0) + IF(NEW.ph9 IS NOT NULL AND NEW.ph9 != 0,1,0) +
                             IF(NEW.ph10 IS NOT NULL AND NEW.ph10 != 0,1,0);

                SET jml_ti = IF(NEW.ti1 IS NOT NULL AND NEW.ti1 != 0,1,0) + IF(NEW.ti2 IS NOT NULL AND NEW.ti2 != 0,1,0) + IF(NEW.ti3 IS NOT NULL AND NEW.ti3 != 0,1,0) +
                             IF(NEW.ti4 IS NOT NULL AND NEW.ti4 != 0,1,0) + IF(NEW.ti5 IS NOT NULL AND NEW.ti5 != 0,1,0);

                SET jml_tk = IF(NEW.tk1 IS NOT NULL AND NEW.tk1 != 0,1,0) + IF(NEW.tk2 IS NOT NULL AND NEW.tk2 != 0,1,0) + IF(NEW.tk3 IS NOT NULL AND NEW.tk3 != 0,1,0);

                SET rata_ph = (
                    IFNULL(NEW.ph1,0) + IFNULL(NEW.ph2,0) + IFNULL(NEW.ph3,0) + IFNULL(NEW.ph4,0) + IFNULL(NEW.ph5,0) +
                    IFNULL(NEW.ph6,0) + IFNULL(NEW.ph7,0) + IFNULL(NEW.ph8,0) + IFNULL(NEW.ph9,0) + IFNULL(NEW.ph10,0)
                ) / NULLIF(jml_ph, 0);

                SET rata_ti = (
                    IFNULL(NEW.ti1,0) + IFNULL(NEW.ti2,0) + IFNULL(NEW.ti3,0) + IFNULL(NEW.ti4,0) + IFNULL(NEW.ti5,0)
                ) / NULLIF(jml_ti, 0);

                SET rata_tk = (
                    IFNULL(NEW.tk1,0) + IFNULL(NEW.tk2,0) + IFNULL(NEW.tk3,0)
                ) / NULLIF(jml_tk, 0);

                SET rata_kognitif = (
                    ((COALESCE(rata_ph,0) + COALESCE(rata_ti,0) + COALESCE(rata_tk,0)) / 3) + IFNULL(NEW.uts,0)
                ) / 2;

                SET NEW.rata_rata = (rata_kognitif * NEW.bobot_kognitif) + (IFNULL(NEW.uas,0) * NEW.bobot_uas);
            END;");

        // Trigger BEFORE UPDATE
        $this->db->query("
        CREATE TRIGGER hitung_rata_rata_sebelum_update
            BEFORE UPDATE ON nilai
            FOR EACH ROW
            BEGIN
                DECLARE rata_ph DECIMAL(5,2);
                DECLARE rata_ti DECIMAL(5,2);
                DECLARE rata_tk DECIMAL(5,2);
                DECLARE rata_kognitif DECIMAL(5,2);
                DECLARE jml_ph INT;
                DECLARE jml_ti INT;
                DECLARE jml_tk INT;

                SET jml_ph = IF(NEW.ph1 IS NOT NULL AND NEW.ph1 != 0,1,0) + IF(NEW.ph2 IS NOT NULL AND NEW.ph2 != 0,1,0) + IF(NEW.ph3 IS NOT NULL AND NEW.ph3 != 0,1,0) +
                             IF(NEW.ph4 IS NOT NULL AND NEW.ph4 != 0,1,0) + IF(NEW.ph5 IS NOT NULL AND NEW.ph5 != 0,1,0) + IF(NEW.ph6 IS NOT NULL AND NEW.ph6 != 0,1,0) +
                             IF(NEW.ph7 IS NOT NULL AND NEW.ph7 != 0,1,0) + IF(NEW.ph8 IS NOT NULL AND NEW.ph8 != 0,1,0) + IF(NEW.ph9 IS NOT NULL AND NEW.ph9 != 0,1,0) +
                             IF(NEW.ph10 IS NOT NULL AND NEW.ph10 != 0,1,0);

                SET jml_ti = IF(NEW.ti1 IS NOT NULL AND NEW.ti1 != 0,1,0) + IF(NEW.ti2 IS NOT NULL AND NEW.ti2 != 0,1,0) + IF(NEW.ti3 IS NOT NULL AND NEW.ti3 != 0,1,0) +
                             IF(NEW.ti4 IS NOT NULL AND NEW.ti4 != 0,1,0) + IF(NEW.ti5 IS NOT NULL AND NEW.ti5 != 0,1,0);

                SET jml_tk = IF(NEW.tk1 IS NOT NULL AND NEW.tk1 != 0,1,0) + IF(NEW.tk2 IS NOT NULL AND NEW.tk2 != 0,1,0) + IF(NEW.tk3 IS NOT NULL AND NEW.tk3 != 0,1,0);

                SET rata_ph = (
                    IFNULL(NEW.ph1,0) + IFNULL(NEW.ph2,0) + IFNULL(NEW.ph3,0) + IFNULL(NEW.ph4,0) + IFNULL(NEW.ph5,0) +
                    IFNULL(NEW.ph6,0) + IFNULL(NEW.ph7,0) + IFNULL(NEW.ph8,0) + IFNULL(NEW.ph9,0) + IFNULL(NEW.ph10,0)
                ) / NULLIF(jml_ph, 0);

                SET rata_ti = (
                    IFNULL(NEW.ti1,0) + IFNULL(NEW.ti2,0) + IFNULL(NEW.ti3,0) + IFNULL(NEW.ti4,0) + IFNULL(NEW.ti5,0)
                ) / NULLIF(jml_ti, 0);

                SET rata_tk = (
                    IFNULL(NEW.tk1,0) + IFNULL(NEW.tk2,0) + IFNULL(NEW.tk3,0)
                ) / NULLIF(jml_tk, 0);

                SET rata_kognitif = (
                    ((COALESCE(rata_ph,0) + COALESCE(rata_ti,0) + COALESCE(rata_tk,0)) / 3) + IFNULL(NEW.uts,0)
                ) / 2;

                SET NEW.rata_rata = (rata_kognitif * NEW.bobot_kognitif) + (IFNULL(NEW.uas,0) * NEW.bobot_uas);
            END;");
    }

    public function down()
    {
        $this->db->query("DROP TRIGGER IF EXISTS hitung_rata_rata_sebelum_insert");
        $this->db->query("DROP TRIGGER IF EXISTS hitung_rata_rata_sebelum_update");
    }
}
