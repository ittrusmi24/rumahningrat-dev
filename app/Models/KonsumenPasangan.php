<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsumenPasangan extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 'm_konsumen_pasangan';
    protected $guarded = [];
    public $timestamps = false;
}
