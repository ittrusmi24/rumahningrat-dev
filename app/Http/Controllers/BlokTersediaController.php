<?php

namespace App\Http\Controllers;

use App\Models\BlokTersedia;
use Illuminate\Http\Request;

class BlokTersediaController extends Controller
{
    public function index(Request $request)
    {
        $id_project = $request->id_project;
        if ($id_project == '') {
            echo json_encode([
                'status' => true,
                'message' => 'ID Project Tidak Boleh Kosong',
            ]);
            return;
        }
        try {
            //code...
            // $blok = BlokTersedia::get_blok_by_id_project($id_project);
            $blok = collect(BlokTersedia::get_blok_by_id_project($id_project))->map(function ($item) {
                $item->harga_tanah = number_format($item->harga_tanah, 0, ',', '.');
                $item->nominal_booking = number_format($item->nominal_booking, 0, ',', '.');
                $item->dp = number_format($item->dp, 0, ',', '.');
                $item->biaya_pagar = number_format($item->biaya_pagar, 0, ',', '.');
                $item->biaya_tembok = number_format($item->biaya_tembok, 0, ',', '.');
                $item->biaya_ipl = number_format($item->biaya_ipl, 0, ',', '.');
                $item->biaya_kelebihan_tanah = number_format($item->biaya_kelebihan_tanah, 0, ',', '.');
                $item->total = number_format($item->total, 0, ',', '.');
                $item->potongan = number_format($item->potongan, 0, ',', '.');
                $item->total_all = number_format($item->total_all, 0, ',', '.');
                return $item;
            });
            echo json_encode([
                'status' => true,
                'message' => 'success',
                'data' => $blok
            ]);
        } catch (\Throwable $th) {
            throw $th;
            echo json_encode([
                'status' => false,
                'message' => 'Error, Check Log...' . $th,
            ]);
            return;
        }
    }
    public function grouped(Request $request)
    {
        $id_project = $request->id_project;
        if ($id_project == '') {
            echo json_encode([
                'status' => true,
                'message' => 'ID Project Tidak Boleh Kosong',
            ]);
            return;
        }
        try {
            //code...
            $blok = BlokTersedia::get_grup_blok_by_id_project($id_project);
            echo json_encode([
                'status' => true,
                'message' => 'success',
                'data' => $blok
            ]);
        } catch (\Throwable $th) {
            throw $th;
            echo json_encode([
                'status' => false,
                'message' => 'Error, Check Log...' . $th,
            ]);
            return;
        }
    }
}
