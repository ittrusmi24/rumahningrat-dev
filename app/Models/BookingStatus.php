<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingStatus extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 't_gci_status';

    protected $fillable = [
        'id_gci',
        'id_gci_status',
        'gci_status',
        'created_at',
    ];
}
