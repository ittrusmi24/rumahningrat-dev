<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class FasilitasController extends Controller
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
            $fasilitas = Fasilitas::get_fasilitas_by_id_project($id_project);
            echo json_encode([
                'status' => true,
                'message' => 'ID Project Tidak Boleh Kosong',
                'data' => $fasilitas
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
