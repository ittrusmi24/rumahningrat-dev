<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsumenClik extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 'clik_m_konsumen';

    protected $guarded = [];

    public $timestamps = false;
}
