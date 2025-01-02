<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Konsumen extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 'm_konsumen';
    protected $primaryKey = 'id_konsumen';

    protected $fillable = [
        'id_konsumen',
        'nama_konsumen',
        'ktp',
        'usia',
        'id_status',
        'id_pekerjaan',
        'id_sub_pekerjaan',
        'level_pekerjaan',
        'ket_pekerjaan',
        'tgl_lahir',
        'pendapatan',
        'no_hp',
        'no_hp_darurat',
        'email',
        'rtrw',
        'id_provinsi',
        'id_kota',
        'id_kecamatan',
        'id_kelurahan',
        'created_at',
        'created_by',
        'domisili',
        'bpjs',
        'perusahaan',
        'tipe_pembayaran',
    ];

    public static function generate_id_konsumen()
    {
        $current_date = Carbon::now()->format('Y-m-d');
        // Get the max ID based on the current date
        $kdMax = DB::connection('rsp_connection')
            ->table('m_konsumen')
            ->select(DB::raw('MAX(RIGHT(id_konsumen, 4)) as kd_max'))
            ->whereDate('created_at', '=', $current_date)
            ->first();

        $kode_cs = "";
        if ($kdMax && $kdMax->kd_max) {
            $tmpCs = (int) $kdMax->kd_max + 1;
            $kode_cs = sprintf("%04s", $tmpCs);
        } else {
            $kode_cs = "0001";
        }
        // Generate the full Konsumen code
        $no_cs = 'CS' . Carbon::now()->format('ymd') . $kode_cs;
        return $no_cs;
    }
}
