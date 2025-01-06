<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 'm_project';

    public static function get_project_by_id($id_project)
    {

        if ($id_project == '') {
            return $project = [];
        }

        $query = "SELECT
            p.id_project,
            p.prj_eces,
            p.project,
            p.alias,
            SUBSTRING_INDEX(p.alias, ' ', 2) AS title_satu,
            TRIM(SUBSTR(p.alias, LENGTH(SUBSTRING_INDEX(p.alias, ' ', 2)) + 1)) AS title_dua,
            IF(COALESCE(p.`status`,'') = '', 'active', 'non_active') AS `status`,
            pt.project_tipe,
            COALESCE(p.tipe_rumah,'') AS tipe_rumah,
            p.harga_jual,
            alamat,
            p.latitude,
	        p.longitude,
            pd.denah,
	        pd.link_video,
	        pd.spesifikasi,
	        p.usp AS poin_plus,
            COALESCE(p.nominal_free_pagar,0) AS is_free_pagar,
            COALESCE(p.nominal_free_tembok,0) AS is_free_tembok
        FROM
            m_project p
            LEFT JOIN m_project_tipe pt ON pt.id_project_tipe = p.id_project_tipe
            LEFT JOIN m_project_detail pd ON p.id_project = pd.id_project
            WHERE pd.fasilitas IS NOT NULL AND p.id_project = $id_project 
            AND p.`status` IS NULL
            ";

        $project = DB::connection('rsp_connection')
            ->select($query);


        // Konversi hasil menjadi array asosiatif
        $projectArray = json_decode(json_encode($project), true);

        // Return data sebagai array
        return $projectArray[0] ?? [];
    }
    public static function get_project_by_id_eces($id_project)
    {

        if ($id_project == '') {
            return $project = [];
        }

        $query = "SELECT
            p.id_project,
            p.prj_eces,
            p.project,
            p.alias,
            IF(COALESCE(p.`status`,'') = '', 'active', 'non_active') AS `status`,
            pt.project_tipe,
            COALESCE(p.tipe_rumah,'') AS tipe_rumah,
            p.harga_jual,
            alamat
        FROM
            m_project p
            LEFT JOIN m_project_tipe pt ON pt.id_project_tipe = p.id_project_tipe
            LEFT JOIN m_project_detail pd ON p.id_project = pd.id_project
            WHERE p.id_project = $id_project 
            ";

        $project = DB::connection('rsp_connection')
            ->select($query);

        // Return data sebagai array
        return $project[0] ?? [];
    }
}
