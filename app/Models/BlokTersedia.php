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
                -- p.project,
                -- p.alias,
                mpu.blok,
                MIN(mpu.terima_kunci) AS terima_kunci,
                -- mpu.id_status,
                COUNT(DISTINCT mpu.blok) AS sisa_unit,
                CASE WHEN p.id_project_tipe = 2 THEN 2500000 WHEN p.id_project_tipe != 2 AND (LEFT(mpu.type_blok,4) = 'Hook' OR LEFT(mpu.type_blok,3) = 'KLT') THEN 1000000 ELSE 500000 END as nominal_booking
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
}
