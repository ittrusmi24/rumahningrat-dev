<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRumahNingrat extends Model
{
    protected $connection = 'rumahningrat_connection';
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
