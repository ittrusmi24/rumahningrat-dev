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
            $blok = BlokTersedia::get_blok_by_id_project($id_project);
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
