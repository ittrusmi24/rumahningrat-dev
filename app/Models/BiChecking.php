<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BiChecking extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 't_bic';
    protected $primaryKey = 'id_bic';
    protected $guarded = [];

    public static function generate_id_bic()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        // Get the max ID based on the current date
        $kdMax = DB::connection('rsp_connection')
            ->table('t_bic')
            ->select(DB::raw('MAX(RIGHT(id_bic, 4)) as kd_max'))
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
        $id_bic = 'BIC' . Carbon::now()->format('ymd') . $kdCs;
        return $id_bic;
    }
}
