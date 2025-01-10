<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatHistory extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 't_chat_kons_history';
    protected $primaryKey = 'id_history';
    public $timestamps = false;

    protected $guarded = [];
}
