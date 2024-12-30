<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FasilitasSekitar extends Model
{
    protected $table = 'm_poi';
    public static function get_fasilitas_sekitar_by_id_project($id_project)
    {

        if ($id_project == '') {
            return $fasilitas_sekitar = [];
        }

        $query = "SELECT 
            m_poi.category, 
            m_poi.subcategory, 
            m_poi.poi_name,
            (6371 * ACOS(COS(RADIANS(p.latitude)) * COS(RADIANS(m_poi.latitude)) * COS(RADIANS(m_poi.longitude) - RADIANS(p.longitude)) + SIN(RADIANS(p.latitude)) * SIN(RADIANS(m_poi.latitude)))) AS jarak_km
        FROM 
            m_poi, 
            (select id_project, latitude, longitude FROM m_project WHERE id_project = $id_project) AS p
        WHERE category != 'Kontrakan'
        HAVING jarak_km <= 2
        ORDER BY jarak_km ASC";

        $fasilitas_sekitar = DB::connection('rsp_connection')
            ->select($query);

        return $fasilitas_sekitar;
    }
}
