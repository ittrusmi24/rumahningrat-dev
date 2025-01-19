<?php

namespace App\Http\Controllers;

use App\Models\FasilitasSekitar;
use Illuminate\Http\Request;

class FasilitasSekitarController extends Controller
{
    public function index(Request $request)
    {
        $id_project = $request->id_project;
        $category_id = $request->category_id;
        if ($id_project == '') {
            echo json_encode([
                'status' => true,
                'message' => 'ID Project Tidak Boleh Kosong',
            ]);
            return;
        }
        try {
            //code...
            $fasilitas_sekitar = FasilitasSekitar::get_fasilitas_sekitar_by_id_project($id_project, $category_id);
            echo json_encode([
                'status' => true,
                'message' => 'success',
                'data' => $fasilitas_sekitar
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
            $fasilitas_sekitar = FasilitasSekitar::get_fasilitas_sekitar_by_id_project_grouped($id_project);
            echo json_encode([
                'status' => true,
                'message' => 'success',
                'data' => $fasilitas_sekitar
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
