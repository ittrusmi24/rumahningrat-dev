<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lokasi extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 'r_kelurahan_new';

    public static function  getKota()
    {
        $query = "SELECT
                    kot.id_kota,
                    kot.kota
                FROM
                    r_kota_dummy kot
                ORDER BY kot.kota";
        return DB::connection('rsp_connection')->select($query);
    }

    public static function getLokasi($params)
    {
        $query = "SELECT
                    kot.id_kota,
                    kot.kota,
                    kec.id_kecamatan,
                    kec.kecamatan,
                    kel.id_kelurahan,
                    kel.kelurahan,
                    CONCAT(kel.kelurahan, ', ', kec.kecamatan, ', ', kot.kota) AS lokasi
                FROM
                    r_kelurahan_new kel
                    JOIN r_kecamatan_new kec ON kel.id_kecamatan = kec.id_kecamatan
                    JOIN r_kota_dummy kot ON kot.id_kota = kec.id_kota
                WHERE kel.kelurahan LIKE '%" . $params . "%' OR kec.kecamatan LIKE '%" . $params . "%' OR kot.kota LIKE '%" . $params . "%' OR kel.kelurahan LIKE '%" . $params . "%'
                ORDER BY kec.kecamatan
                LIMIT 50";
        return DB::connection('rsp_connection')->select($query);
    }
}
