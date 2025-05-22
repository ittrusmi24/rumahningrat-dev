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

        $project_double_booking = [70, 40, 53];

        if (in_array($id_project, $project_double_booking) == 1) {
            $condition = "";
        } else {
            $condition = " AND NOT EXISTS (SELECT g.id_project, g.blok FROM t_gci g WHERE id_kategori >= 3 AND g.id_project = p.id_project AND g.blok = mpu.blok)";
        }

        // $backup_query = "SELECT
        //         p.id_project,
        //         mpu.blok,
        //         CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN '(Ada Hook/KLT)' ELSE '' END as hook_klt,
        //         MIN(mpu.terima_kunci) AS terima_kunci,
        //         COUNT(DISTINCT mpu.blok) AS sisa_unit,
        //         CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END as nominal_booking,
        //         p.harga_tanah,
        //         COALESCE(mpu.terima_kunci,5000000) AS dp,
        //         COALESCE(p.nominal_free_pagar,0) AS biaya_pagar,
        //         COALESCE(p.nominal_free_tembok,0) AS biaya_tembok,
        //         COALESCE(p.nominal_free_ipl,0) AS biaya_ipl,
        //         COALESCE(mpu.nominal_hook,0) AS biaya_hook,
        //         COALESCE(biaya_kelebihan_tanah,0) AS biaya_kelebihan_tanah,
        //         COALESCE(p.nominal_bphtb,0) AS biaya_bphtb,
        //         CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END + COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) + (COALESCE(biaya_kelebihan_tanah,0)) + COALESCE(p.nominal_bphtb,0) + COALESCE(mpu.nominal_hook,0) AS total,
        //         COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) AS potongan,
        //         (CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END + COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) + (COALESCE(biaya_kelebihan_tanah,0)) + COALESCE(p.nominal_bphtb,0) + COALESCE(mpu.nominal_hook,0)) - (COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0)) AS total_all
        //     FROM
        //         m_project p
        //         LEFT JOIN m_project_unit mpu ON mpu.id_project = p.id_project
        //         LEFT JOIN m_status_stok mss ON mss.`status` = mpu.id_status
        //         LEFT JOIN m_project_tipe pt ON pt.id_project_tipe = p.id_project_tipe
        //         LEFT JOIN m_project_detail pd ON p.id_project = pd.id_project
        //     WHERE
        //         pd.fasilitas IS NOT NULL
        //         AND p.id_project = $id_project
        //         AND p.id_project != 30
        //         AND p.`status` IS NULL
        //         AND mpu.not_sale IS NULL
        //         AND mpu.id_status <= 2
        //         AND NOT EXISTS (SELECT g.id_project, g.blok FROM t_gci g WHERE id_kategori >= 3 AND g.id_project = p.id_project AND g.blok = mpu.blok)
        //         GROUP BY p.id_project, mpu.blok";
        // $query = "SELECT
        //         p.id_project,
        //         mpu.blok,
        //         CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN '(Ada Hook/KLT)' ELSE '' END as hook_klt,
        //         MIN(mpu.terima_kunci) AS terima_kunci,
        //         COUNT(DISTINCT mpu.blok) AS sisa_unit,
        //         CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END as nominal_booking,
        //         p.harga_tanah,
        //         COALESCE(mpu.terima_kunci,5000000) AS dp,
        //         COALESCE(p.nominal_free_pagar,0) AS biaya_pagar,
        //         COALESCE(p.nominal_free_tembok,0) AS biaya_tembok,
        //         COALESCE(p.nominal_free_ipl,0) AS biaya_ipl,
        //         COALESCE(mpu.nominal_hook,0) AS biaya_hook,
        //         COALESCE(biaya_kelebihan_tanah,0) AS biaya_kelebihan_tanah,
        //         COALESCE(mpu.tk_indent,0) - (CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END) AS biaya_bphtb,
        //         mpu.tot_ar + COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) AS total,
        //         COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) AS potongan,
        //         mpu.tot_ar AS total_all
        //     FROM
        //         m_project p
        //         LEFT JOIN m_project_unit mpu ON mpu.id_project = p.id_project
        //         LEFT JOIN m_status_stok mss ON mss.`status` = mpu.id_status
        //         LEFT JOIN m_project_tipe pt ON pt.id_project_tipe = p.id_project_tipe
        //         LEFT JOIN m_project_detail pd ON p.id_project = pd.id_project
        //     WHERE
        //         pd.fasilitas IS NOT NULL
        //         AND p.id_project = $id_project
        //         AND p.id_project != 30
        //         AND p.`status` IS NULL
        //         AND mpu.not_sale IS NULL
        //         AND mpu.id_status <= 2
        //         AND NOT EXISTS (SELECT g.id_project, g.blok FROM t_gci g WHERE id_kategori >= 3 AND g.id_project = p.id_project AND g.blok = mpu.blok)
        //         GROUP BY p.id_project, mpu.blok";
        $query = "SELECT
                    p.id_project,
                    mpu.blok,
					CASE WHEN COUNT(DISTINCT g.id_gci) != 0 THEN
                        CONCAT('(JB : ',COUNT(DISTINCT g.id_gci),')')
					ELSE '' END AS jml_booking,
                        SUM(CASE WHEN COALESCE(s.status_proses,0) IN (43,443,45,47) THEN 1 ELSE 0 END) AS is_akad,
                    CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN '(Ada Hook/KLT)' ELSE '' END as hook_klt,
                    MIN(mpu.terima_kunci) AS terima_kunci,
                    COUNT(DISTINCT mpu.blok) AS sisa_unit,
                    CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END as nominal_booking,
                    p.harga_tanah,
                    COALESCE(mpu.terima_kunci,5000000) AS dp,
                    COALESCE(p.nominal_free_pagar,0) AS biaya_pagar,
                    COALESCE(p.nominal_free_tembok,0) AS biaya_tembok,
                    COALESCE(p.nominal_free_dapur,0) AS biaya_dapur,
                    COALESCE(p.nominal_free_ipl,0) AS biaya_ipl,
                    COALESCE(mpu.nominal_hook,0) AS biaya_hook,
                    COALESCE(biaya_kelebihan_tanah,0) AS biaya_kelebihan_tanah,
                    COALESCE(mpu.tk_indent,0) - (CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END) AS biaya_bphtb,
                    mpu.tot_ar + COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) AS total,
                    COALESCE(mpu.terima_kunci,5000000) + COALESCE(p.nominal_free_pagar,0) + COALESCE(p.nominal_free_tembok,0) + COALESCE(p.nominal_free_ipl,0) AS potongan,
                    mpu.tot_ar AS total_all
                FROM
                    m_project p
                    LEFT JOIN m_project_unit mpu ON mpu.id_project = p.id_project
                    LEFT JOIN t_gci g ON g.id_project = mpu.id_project AND g.blok = mpu.blok AND id_kategori >= 3
                    LEFT JOIN view_status_proses s ON s.id_gci = g.id_gci
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
                    AND COALESCE(s.status_proses,0) NOT IN (43,443,45,47)
                    $condition
                    GROUP BY p.id_project, mpu.blok
                    HAVING COUNT(DISTINCT g.id_gci) < 2";

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

    public static function get_blok_status_double_book($id_project){
        $query = "SELECT
                m_project_unit.blok,
                m_project.project,
                COUNT( DISTINCT konsumen.id_gci ) AS jml_booking,
                SUM( CASE WHEN COALESCE(status_proses.id_status_proses,0) IN ( 43, 443, 45, 47 ) THEN 1 ELSE 0 END ) AS is_akad,
            CASE
                    WHEN m_project_unit.not_sale = 1 THEN
                        'Not Sale'
                    WHEN m_project_unit.is_keep = 1 THEN
                        'Terboking'
                    WHEN COUNT( DISTINCT konsumen.id_gci ) >= 2 THEN 'Terjual'
                    WHEN SUM( CASE WHEN COALESCE(status_proses.id_status_proses,0) IN ( 43, 443, 45, 47 ) THEN 1 ELSE 0 END ) > 0 THEN
                        'Terjual'
                        WHEN SUM( CASE WHEN COALESCE(status_proses.id_status_proses,0) IN ( 43, 443, 45, 47 ) THEN 1 ELSE 0 END ) = 0
                        AND COUNT( DISTINCT konsumen.id_gci ) > 0
                        AND COUNT( DISTINCT konsumen.id_gci ) < 3 THEN
                            'Waiting List'
                            ELSE 'Kosong'
                    END AS status
                    FROM
                        m_project_unit
                        LEFT JOIN m_project ON m_project.id_project = m_project_unit.id_project
                        LEFT JOIN (
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
                                GROUP_CONCAT( DISTINCT k.nama_konsumen ) AS nama_konsumen,
                                t_gci.blok,
                                t_gci.id_project
                            FROM
                                t_gci
                                LEFT JOIN m_konsumen k ON k.id_konsumen = t_gci.id_konsumen
                            WHERE
                                t_gci.id_project = '$id_project'
                                and id_kategori > 2
                            GROUP BY
                                t_gci.id_gci,
                                blok,
                                id_project
                            ) AS gci
                            JOIN m_konsumen ON gci.id_konsumen = m_konsumen.id_konsumen
                            LEFT JOIN t_interview ON t_interview.id_gci = gci.id_gci
                            LEFT JOIN t_spr ON t_spr.id_gci = gci.id_gci
                            LEFT JOIN view_spr ON view_spr.id_gci = gci.id_gci
                        ) AS konsumen ON m_project_unit.blok = konsumen.blok
                        AND m_project_unit.id_project = konsumen.id_project
                        LEFT JOIN (
                        SELECT
                            view_status_proses.id_gci,
                            view_status_proses.status_proses AS id_status_proses,
                            view_status_proses.status_name AS status_proses
                        FROM
                            view_status_proses
                        WHERE
                            view_status_proses.id_gci IN ( SELECT id_gci FROM t_gci WHERE id_project = '$id_project' and id_kategori > 2 GROUP BY blok, id_project )
                        ) status_proses ON status_proses.id_gci = konsumen.id_gci
                    WHERE
                        m_project_unit.id_project = '$id_project' -- AND m_project_unit.not_sale IS NULL
            -- and SUBSTR(m_project_unit.blok,1,1) in ('F','G','H')

                    GROUP BY
                        m_project_unit.blok
                ORDER BY
                m_project_unit.blok ASC";
        return DB::connection('rsp_connection')
            ->select($query);
    }

    public static function get_blok_status($id_project)
    {
        $query = "SELECT

                    m_project_unit.blok,
                    m_project.project,
                    COALESCE(CASE

                        WHEN m_project_unit.not_sale = 1 then 'Not Sale'
                        WHEN m_project_unit.id_status IN (3,6) then 'Terjual'
                        WHEN m_project_unit.id_status IN (2,5) and konsumen.hasil_int is null and konsumen.jenis like '%Cash%' then 'Terjual'
                        WHEN m_project_unit.id_status IN (2,5) and konsumen.hasil_int is null then 'Terjual'
                        WHEN m_project_unit.id_status IN (2,5) and konsumen.hasil_int =1  then 'Terjual'
                        WHEN m_project_unit.id_status IN(0,1)  then 'Kosong'
                        ELSE 'Terjual'
                    END, '-') as 'status'

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
                        WHERE t_gci.id_project = $id_project and id_kategori > 2
                        GROUP BY blok, id_project
                    ) AS gci
                    JOIN m_konsumen ON gci.id_konsumen = m_konsumen.id_konsumen
                    LEFT JOIN t_interview ON t_interview.id_gci=gci.id_gci
                    LEFT JOIN t_spr ON t_spr.id_gci=gci.id_gci
                    LEFT JOIN view_spr ON view_spr.id_gci = gci.id_gci
                ) AS konsumen ON m_project_unit.blok = konsumen.blok AND m_project_unit.id_project = konsumen.id_project




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
                    WHERE id_project = $id_project and id_kategori > 2
                    GROUP BY blok, id_project
                )

            ) status_proses ON status_proses.id_gci = konsumen.id_gci

            WHERE m_project_unit.id_project = $id_project
            -- AND m_project_unit.not_sale IS NULL
            -- and SUBSTR(m_project_unit.blok,1,1) in ('F','G','H')

            GROUP BY m_project_unit.blok
            ORDER BY m_project_unit.blok ASC";
        return DB::connection('rsp_connection')
            ->select($query);
    }
}
