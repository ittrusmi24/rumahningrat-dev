<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ulasan extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 'm_project_ulasan';

    public static function get_ulasan_by_id_project($id_project)
    {

        if ($id_project == '') {
            return $ulasan = [];
        }

        $query = "SELECT
                    u.nama,
                    u.tags,
                    u.ulasan,
                    UPPER(DATE_FORMAT(u.tgl_ulasan, '%b %Y')) AS ulasan_at
                FROM
                    `m_project_ulasan` u
                    WHERE u.id_project = '$id_project'
            ";

        $ulasan = DB::connection('rsp_connection')
            ->select($query);


        // Konversi hasil menjadi array asosiatif
        $ulasanArray = json_decode(json_encode($ulasan), true);

        // Return data sebagai array
        return $ulasanArray ?? [];
    }
}
