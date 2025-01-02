<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingHistoryRsp extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 't_gci_history';

    protected $guarded = ['updated_at'];

    public $timestamps = false;

    protected $fillable = [
        'id_gci',
        'id_kategori',
        'blok',
        'nominal',
        'created_at',
        'ket_proses',
    ];
}
