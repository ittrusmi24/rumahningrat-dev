<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BicVoucher extends Model
{
    protected $table = 't_bic_voucher';
    protected $guarded = [];
    public $timestamps = false;
    protected $connection = 'rsp_connection';
}
