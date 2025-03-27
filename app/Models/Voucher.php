<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Voucher extends Model
{
    protected $table = 't_bic_voucher';
    protected $guarded = '';

    public static function checkQuota($periode, $id_project)
    {

        return DB::connection('rsp_connection')
            ->table('m_gci_voucher as gv')
            ->selectRaw('gv.periode, gv.id_voucher, bv.deskripsi, gv.max_quota, COUNT(g.id_gci) as jml_klaim')
            ->leftJoin('m_bic_voucher as bv', 'bv.id', '=', 'gv.id_voucher')
            ->leftJoin('t_bic_voucher as tbv', function ($join) {
                $join->on('gv.id_voucher', '=', DB::raw("FIND_IN_SET(gv.id_voucher, tbv.id_voucher)"));
            })
            ->leftJoin('t_gci as g', function ($join) {
                $join->on('g.id_gci', '=', 'tbv.id_gci')
                    ->where('g.id_kategori', '=', 3)
                    ->whereRaw("LEFT(g.blok, 2) != 'RD'");
            })
            ->where('gv.id_project', '=', $id_project)
            ->where('gv.periode', '=', $periode)
            ->groupBy('gv.id_voucher', 'gv.id_project')
            ->first();

        $result = DB::connection('rsp_connection')->select($query, [$periode]);
    }
}
