<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 't_selfbook_history_click';
    protected $guarded = [];
    public $timestamps = false;
}
