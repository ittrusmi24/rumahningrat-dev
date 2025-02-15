<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 't_gci';
    protected $fillable = [
        'id_gci',
        'id_project',
        'blok',
        'id_event',
        'id_kategori',
        'id_konsumen',
        'nominal',
        'id_project_tipe',
        'id_gci_status',
        'jenis_pembayaran',
        'kelurahan',
        'id_user',
        'spv',
        'id_manager',
        'id_gm',
        'created_at',
        'created_by',
        'reveral',
        'kode_referral',
        'opsi_pagar',
    ];
    public $timestamps = false;

    public static function generate_id_gci()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        // Get the max ID based on the current date
        $kdMax = DB::connection('rsp_connection')
            ->table('t_gci')
            ->select(DB::raw('MAX(RIGHT(id_gci, 4)) as kd_max'))
            ->whereDate('created_at', '=', $currentDate)
            ->first();

        $kdCs = "";
        if ($kdMax && $kdMax->kd_max) {
            $tmpCs = (int) $kdMax->kd_max + 1;
            $kdCs = sprintf("%04s", $tmpCs);
        } else {
            $kdCs = "0001";
        }
        // Generate the full Konsumen code
        $id_gci = 'GCI' . Carbon::now()->format('ymd') . $kdCs;
        return $id_gci;
    }

    public static function get_id_project_tipe($id_project, $blok)
    {
        $project_tipe = DB::connection('rsp_connection')
            ->table('m_project_unit')
            ->select('project_tipe')
            ->where('id_project', '=', $id_project)
            ->where('blok', '=', $blok)
            ->first();
        return $project_tipe->project_tipe;
    }
}
