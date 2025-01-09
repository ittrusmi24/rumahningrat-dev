<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chat extends Model
{
    protected $connection = 'rsp_connection';
    protected $table = 't_chat_kons_jawaban';

    public static function get_all_kategori()
    {
        $query = "SELECT id_kategori, kategori FROM `m_chat_kons_kategori`";
        $kategori = DB::connection('rsp_connection')
            ->select($query);
        return $kategori;
    }
    public static function get_all_sub_kategori($id_kategori)
    {
        $query = "SELECT id_sub_kategori, id_kategori, sub_kategori FROM `m_chat_kons_sub_kategori` WHERE id_kategori = $id_kategori";
        $sub_kategori = DB::connection('rsp_connection')
            ->select($query);
        return $sub_kategori;
    }
    public static function get_jawaban($id_sub_kategori)
    {
        $query = "SELECT id_jawaban, id_sub_kategori, jawaban FROM `t_chat_kons_jawaban` WHERE id_sub_kategori = $id_sub_kategori";
        $jawaban = DB::connection('rsp_connection')
            ->select($query);
        return $jawaban;
    }
}
