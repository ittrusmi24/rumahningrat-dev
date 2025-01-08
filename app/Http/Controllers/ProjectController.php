<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function get_all_project()
    {
        $project = Project::get_all_project();
        echo json_encode([
            'status' => true,
            'message' => 'success',
            'data' => $project
        ]);
    }


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
            $project = Project::get_project_by_id($id_project);
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
