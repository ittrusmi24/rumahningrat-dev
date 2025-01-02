<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectUnit extends Model
{

    protected $connection = 'rsp_connection';
    protected $table = 'm_project_unit';

    protected $fillable = [
        'id_status',
        'blok',
    ];
}
