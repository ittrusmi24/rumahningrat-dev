<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Referral extends Model
{
    protected $table = 'users';
    public static function getListReferral($params)
    {
        $params = strtolower($params);
        $query = "SELECT
                    r.referral AS kode_referral,
                    r.type,
                    r.`name` AS referral_name,
                    r.is_active,
                    r.jangka_waktu,
                    r.diskon_konsumen 
                FROM
                    user_referral AS r 
                WHERE
                    (LOWER(r.referral) LIKE '%$params%' OR LOWER(r.name) LIKE '%$params%') 
                    AND 
                    r.is_active = 1 AND 
                    r.jangka_waktu >= CURDATE() 
                LIMIT 20
                ";
        return DB::connection('affiliate_connection')->select($query);
    }
}
