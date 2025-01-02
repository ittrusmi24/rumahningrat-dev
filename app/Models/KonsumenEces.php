<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KonsumenEces extends Model
{
    protected $connection = 'eces_connection';
    protected $table = 'tm_customer';

    protected $guarded = [];

    public $timestamps = false;

    public static function get_cus_id()
    {
        $result = DB::connection('eces_connection')->table('tm_customer')
            ->select(DB::raw("COALESCE(MAX(cus_id),0)+1 AS max_id"))
            ->first();

        return $result->max_id;
    }

    public static function get_cus_kd($prjId)
    {
        $ecesDb = DB::connection('eces_connection');

        $maxCode = $ecesDb->table('tm_customer')
            ->select(
                DB::raw("MAX(RIGHT(tm_customer.cus_kd, 4)) AS kd_max"),
                DB::raw("SUBSTRING_INDEX(tm_customer.cus_kd, '/', 1) AS kode_cus")
            )
            ->whereRaw("SUBSTRING_INDEX(tm_customer.cus_kd, '/', 1) = (SELECT prj_kd FROM tm_project WHERE prj_id = ?)", [$prjId])
            ->first();

        $kodeProject = $ecesDb->table('tm_project')
            ->select('prj_kd')
            ->where('prj_id', $prjId)
            ->first();

        $kd = ($maxCode && $maxCode->kd_max) ? sprintf("%04s", ((int) $maxCode->kd_max) + 1) : "0001";

        return $kodeProject->prj_kd . '/' . $kd;
    }
}
