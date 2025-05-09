<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 'm_pekerjaan';
    protected $primaryKey = 'id_pekerjaan';
    public $timestamps = false;
}
