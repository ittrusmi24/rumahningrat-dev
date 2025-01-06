<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
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
            $project = Ulasan::get_ulasan_by_id_project($id_project);
            echo json_encode([
                'status' => true,
                'message' => 'success',
                'data' => $project
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
