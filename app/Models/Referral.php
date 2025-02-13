<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Referral extends Model
{
    protected $table = 'users';
    public static function getListReferral($params)
    {
        $query = "SELECT
                    e.user_id AS id_hr,
                    mkt.id_user AS id_rsp,
                    e.username,
                    mkt.employee_name AS referral_name 
                FROM
                    `user` AS mkt
                    LEFT JOIN hris.xin_employees AS e ON e.user_id = mkt.join_hr 
                WHERE
                    mkt.id_divisi IN ( 2, 20 ) 
                    AND e.is_active = 1 
                AND	
                (
                e.username LIKE '%$params%' 
                    OR CONCAT(e.first_name,' ',e.last_name) LIKE '%$params%'
                )
                ORDER BY
                    e.username 
                LIMIT 20";
        return DB::connection('rsp_connection')->select($query);
    }
}
