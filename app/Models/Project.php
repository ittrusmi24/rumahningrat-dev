<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    protected $table = 'm_project';

    public static function get_project_by_id($id_project)
    {

        if ($id_project == '') {
            return $project = [];
        }

        $query = "SELECT
            p.id_project,
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
            WHERE pd.fasilitas IS NOT NULL AND p.id_project = $id_project AND p.`status` IS NULL";

        $project = DB::connection('rsp_connection')
            ->select($query);

        return $project;
    }
}
