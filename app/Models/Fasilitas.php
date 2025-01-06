<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fasilitas extends Model
{
    protected $table = 'm_fasilitas';
    public static function get_fasilitas_by_id_project($id_project)
    {

        if ($id_project == '') {
            return $fasilitas = [];
        }

        $query = "SELECT
            p.id_project,
            p.project,
            IF(COALESCE(p.`status`,'') = '', 'active', 'non_active') AS `status`,
            f.id AS id_fasilitas,
            f.`name` AS fasilitas,
            icon_new as icon
        FROM
            m_project p
            LEFT JOIN m_project_detail pd ON p.id_project = pd.id_project
            LEFT JOIN m_fasilitas f ON FIND_IN_SET(f.id,pd.fasilitas)
            WHERE pd.fasilitas IS NOT NULL AND p.id_project = $id_project AND p.`status` IS NULL";

        $fasilitas = DB::connection('rsp_connection')
            ->select($query);

        return $fasilitas;
    }
}
