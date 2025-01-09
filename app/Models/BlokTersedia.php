<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlokTersedia extends Model
{
    protected $table = 'm_project_unit';
    public static function get_blok_by_id_project($id_project)
    {

        if ($id_project == '') {
            return $blok = [];
        }

        $query = "SELECT
                p.id_project,
                mpu.blok,
                MIN(mpu.terima_kunci) AS terima_kunci,
                COUNT(DISTINCT mpu.blok) AS sisa_unit,
                CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END as nominal_booking,
                p.harga_tanah,
                COALESCE(mpu.terima_kunci,5000000) AS dp,
                COALESCE(p.nominal_free_pagar,0) AS biaya_pagar,
                COALESCE(p.nominal_free_tembok,0) AS biaya_tembok,
                COALESCE(p.nominal_free_ipl,0) AS biaya_ipl,
                COALESCE(mpu.nominal_hook,0) AS biaya_hook,
                COALESCE(p.harga_tanah,0)*COALESCE(mpu.kelebihan_tanah,0) AS biaya_kelebihan_tanah,
                COALESCE(p.nominal_bphtb,0) AS biaya_bphtb,
                CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END + COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) + (COALESCE(p.harga_tanah,0)*COALESCE(mpu.kelebihan_tanah,0)) + COALESCE(p.nominal_bphtb,0) + COALESCE(mpu.nominal_hook,0) AS total,
                COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) AS potongan,
                (CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END + COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) + (COALESCE(p.harga_tanah,0)*COALESCE(mpu.kelebihan_tanah,0)) + COALESCE(p.nominal_bphtb,0) + COALESCE(mpu.nominal_hook,0)) - (COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0)) AS total_all
            FROM
                m_project p
                LEFT JOIN m_project_unit mpu ON mpu.id_project = p.id_project
                LEFT JOIN m_status_stok mss ON mss.`status` = mpu.id_status
                LEFT JOIN m_project_tipe pt ON pt.id_project_tipe = p.id_project_tipe
                LEFT JOIN m_project_detail pd ON p.id_project = pd.id_project
            WHERE
                pd.fasilitas IS NOT NULL
                AND p.id_project = $id_project
                AND p.id_project != 30
                AND p.`status` IS NULL
                AND mpu.not_sale IS NULL
                AND mpu.id_status <= 2
                AND NOT EXISTS (SELECT g.id_project, g.blok FROM t_gci g WHERE id_kategori >= 3 AND g.id_project = p.id_project AND g.blok = mpu.blok)
                GROUP BY p.id_project, mpu.blok";

        $blok = DB::connection('rsp_connection')
            ->select($query);

        return $blok;
    }
    public static function get_grup_blok_by_id_project($id_project)
    {

        if ($id_project == '') {
            return $blok = [];
        }

        $query = "SELECT
                p.id_project,
                -- p.project,
                -- p.alias,
                LEFT(mpu.blok,1) AS blok,
                MIN(mpu.terima_kunci) AS terima_kunci,
                -- mpu.id_status,
                COUNT(DISTINCT mpu.blok) AS sisa_unit
            FROM
                m_project p
                LEFT JOIN m_project_unit mpu ON mpu.id_project = p.id_project
                LEFT JOIN m_status_stok mss ON mss.`status` = mpu.id_status
                LEFT JOIN m_project_tipe pt ON pt.id_project_tipe = p.id_project_tipe
                LEFT JOIN m_project_detail pd ON p.id_project = pd.id_project
            WHERE
                pd.fasilitas IS NOT NULL
                AND p.id_project = $id_project
                AND p.id_project != 30
                AND p.`status` IS NULL
                AND mpu.not_sale IS NULL
                AND mpu.id_status <= 2
                AND NOT EXISTS (SELECT g.id_project, g.blok FROM t_gci g WHERE id_kategori >= 3 AND g.id_project = p.id_project AND g.blok = mpu.blok)
                GROUP BY p.id_project, LEFT(mpu.blok,1)";

        $blok = DB::connection('rsp_connection')
            ->select($query);

        return $blok;
    }

    public static function get_blok_status($id_project){
        $query = "SELECT
                    m_project_unit.blok,
                    m_project.project,
                    COALESCE(CASE
                        WHEN (ba.project = m_project_unit.id_project AND ba.blok = m_project_unit.blok AND status_proses.status_proses IS NOT NULL) THEN 'Pindah Blok'
                        WHEN (ba_baru.project_baru = m_project_unit.id_project AND ba_baru.blok_baru = m_project_unit.blok AND status_proses.status_proses IS NOT NULL) THEN 'Pindah Blok'
                        WHEN m_project_unit.not_sale = 1 then 'Not Sale'
                        WHEN m_project_unit.id_status IN (3,6) then 'Akad'
                        WHEN m_project_unit.id_status IN (2,5) and konsumen.hasil_int is null and konsumen.jenis like '%Cash%' then 'Booking Cash'
                        WHEN m_project_unit.id_status IN (2,5) and konsumen.hasil_int is null then 'Booking'
                        WHEN m_project_unit.id_status IN (2,5) and konsumen.hasil_int =1  then 'SP3K'
                        WHEN m_project_unit.id_status IN(0,1)  then 'Kosong'
                        ELSE 'Bank'
                    END, '-') as 'status',
                    COALESCE(status_proses.status_proses, '-') as status_proses,
                    COALESCE(ROUND(m_project_unit.progres),0) AS progres,
                    COALESCE(m_project_unit.`type`, '-') as type,
                    COALESCE(konsumen.nama_konsumen,'-') as nama_konsumen,
                    COALESCE(spk.vendor,'-') as vendor,
                    COALESCE(spk.spk_awal,'-') as spk_awal,
                    COALESCE(spk.spk_akhir,'-') as spk_akhir,
                    spk.t_progres,
                    -- COALESCE(SUBSTR(m_project_unit.tgl_vendor,1,10),'-') as tgl_opname,
                    COALESCE(opname.tgl_opname,'-') AS tgl_opname,
                    CASE
                        WHEN spk.t_progres = 100 AND (opname.tgl_opname > spk.spk_akhir) THEN 'Late'
                        WHEN spk.t_progres > m_project_unit.progres THEN 'Late'
                        WHEN spk.t_progres <= m_project_unit.progres THEN 'Ontime'
                    ELSE '-' END AS status_ontime,
                    COALESCE(konsumen.income,0) AS income,
                    COALESCE(konsumen.sisa_ar,0) AS sisa_ar,
                    COALESCE(m_project_unit.not_sale,0) AS not_sale,
                    COALESCE(m_project_unit.terima_kunci, '-') as terima_kunci,
                    COALESCE(m_project_unit.group_tk, '-') as group_tk,
                    CASE
						WHEN COALESCE(m_project_unit.progres,0) = 100
						THEN CONCAT(DATEDIFF(CURRENT_DATE, m_project_unit.tgl_vendor),' Hari')
                        ELSE '-'
                    END AS umur_bangunan,

                    COALESCE(m_project_unit.type_blok,'') AS type_blok,
                    COALESCE(m_project_unit.kelebihan_tanah,'') AS kelebihan_tanah,
                    COALESCE(m_project_unit.tk_indent,'') AS tk_indent,
                    COALESCE(m_project_unit.tk_ready,'') AS tk_ready,
                    COALESCE(m_project_unit.target_jual,'') AS target_jual
                FROM m_project_unit
                LEFT JOIN m_project ON m_project.id_project = m_project_unit.id_project
                LEFT JOIN
                (
                    SELECT
                        gci.id_gci,
                        gci.nama_konsumen,
                        gci.blok,
                        gci.id_project,
                        t_interview.hasil_int,
                        t_spr.jenis,
                        view_spr.income,
                        view_spr.sisa_ar
                    FROM
                        (
                        SELECT
                            t_gci.id_gci,
                            t_gci.id_konsumen,
                            GROUP_CONCAT(DISTINCT k.nama_konsumen) AS nama_konsumen,
                            t_gci.blok,
                            t_gci.id_project
                        FROM t_gci
                        LEFT JOIN m_konsumen k ON k.id_konsumen = t_gci.id_konsumen
                        WHERE t_gci.id_project = 70 and id_kategori >2
                        GROUP BY blok, id_project
                    ) AS gci
                    JOIN m_konsumen ON gci.id_konsumen = m_konsumen.id_konsumen
                    LEFT JOIN t_interview ON t_interview.id_gci=gci.id_gci
                    LEFT JOIN t_spr ON t_spr.id_gci=gci.id_gci
                    LEFT JOIN view_spr ON view_spr.id_gci = gci.id_gci
                ) AS konsumen ON m_project_unit.blok = konsumen.blok AND m_project_unit.id_project = konsumen.id_project
                LEFT JOIN
                ( SELECT
                    id_project,
                    blok,
                    spk_awal,
                    spk_akhir,
                    vendor,
                    spk,
                    CASE
                        -- WHEN lt BETWEEN 0 AND 3 THEN 	10
                        -- WHEN lt BETWEEN 4 AND 9 THEN 	30
                        -- WHEN lt BETWEEN 10 AND 19 THEN 60
                        -- WHEN lt BETWEEN 10 AND 19 THEN 85
                        -- WHEN lt >= spk THEN 100 ELSE 0
                        WHEN lt BETWEEN 0 AND 5 THEN 10
                        WHEN lt BETWEEN 6 AND 11 THEN 30
                        WHEN lt BETWEEN 12 AND 21 THEN 60
                        WHEN lt BETWEEN 22 AND 28 THEN 85
                        WHEN lt >= spk THEN 100 ELSE 0
                    END AS t_progres
                FROM
                    (
                    SELECT
                        a.id_project,
                        a.blok,
                        a.tgl_spk as spk_awal,
                        a.tgl_spk_akhir as spk_akhir,
                        DATEDIFF( a.tgl_spk_akhir, a.tgl_spk ) AS spk,
                        DATEDIFF( CURRENT_DATE, a.tgl_spk ) AS lt,
                        m_vendor.vendor
                    FROM
                        t_project_bangun_detail a
                        join t_project_bangun b on b.id_rencana=a.id_rencana
                        join m_vendor on m_vendor.id_vendor=b.vendor
                    WHERE
                    id_project = 70
                ) x

            ) spk ON m_project_unit.blok = spk.blok AND m_project_unit.id_project = spk.id_project

            LEFT JOIN (SELECT
                t_pengawasan.project,
                t_pengawasan.blok,
                DATE( MAX( t_pengawasan.created_at ) ) AS tgl_opname
                FROM
                    t_pengawasan
                WHERE
                    t_pengawasan.approve = 2
                GROUP BY
                    t_pengawasan.project,
                    t_pengawasan.blok
            ) AS opname ON opname.project = m_project_unit.id_project AND opname.blok = m_project_unit.blok


            LEFT JOIN
            (
                SELECT
                    view_status_proses.id_gci,
                    m_status_proses.status_proses
                FROM view_status_proses
                LEFT JOIN m_status_proses ON m_status_proses.id_status_proses = view_status_proses.status_proses
                WHERE view_status_proses.id_gci IN
                (
                    SELECT
                            id_gci
                    FROM t_gci
                    WHERE id_project = 70 and id_kategori >2
                    GROUP BY blok, id_project
                )

            ) status_proses ON status_proses.id_gci = konsumen.id_gci

            LEFT JOIN t_ba_mkt ba
                ON (
                    ba.project = m_project_unit.id_project
                    AND ba.blok = m_project_unit.blok
                    AND ba.tipe = 2
                    AND ba.`status` IN (1,2,4)
                    AND ba.admin_at IS NULL
                )
                OR (
                    ba.project = m_project_unit.id_project
                    AND ba.blok = m_project_unit.blok
                    AND ba.tipe = 2
                    AND ba.`status` IN (1,2,4)
                    AND ba.gm_at IS NULL
                )

            LEFT JOIN t_ba_mkt ba_baru
                ON (
                    ba_baru.project_baru = m_project_unit.id_project
                    AND ba_baru.blok_baru = m_project_unit.blok
                    AND ba_baru.tipe = 2
                    AND ba_baru.`status` IN (1,2,4)
                    AND ba_baru.admin_at IS NULL
                )
                OR (
                    ba_baru.project_baru = m_project_unit.id_project
                    AND ba_baru.blok_baru = m_project_unit.blok
                    AND ba_baru.tipe = 2
                    AND ba_baru.`status` IN (1,2,4)
                    AND ba_baru.gm_at IS NULL
                )



            WHERE m_project_unit.id_project = 70
            -- and SUBSTR(m_project_unit.blok,1,1) in ('F','G','H')

            GROUP BY m_project_unit.blok
            ORDER BY m_project_unit.blok ASC";
        return DB::connection('rsp_connection')
            ->select($query);

    }
}
