<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Number;
use Illuminate\Support\Arr;
use App\Models\Fasilitas;
use App\Models\FasilitasSekitar;
use App\Models\Project;
use App\Models\BlokTersedia;

use function PHPSTORM_META\map;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function detail(Request $request)
    {
        $id_project = $request->id_project;
        if (!$id_project) {
            return view('welcome');
        }
        $project = Project::get_project_by_id($id_project);
        $project_add = Project::get_project_additional($id_project);
        $fasilitas = Fasilitas::get_fasilitas_by_id_project($id_project);
        $fasilitasSekitar = FasilitasSekitar::get_fasilitas_sekitar_by_id_project_grouped($id_project);
        $blok = BlokTersedia::get_blok_by_id_project($id_project);
        $groupBlok = BlokTersedia::get_grup_blok_by_id_project($id_project);
        $groupBlok = Arr::map($groupBlok, function ($value) {
            $value->terima_kunci = Number::currency($value->terima_kunci ?? 0, in: 'IDR', locale: 'id_ID');
            $value->terima_kunci = str_replace(',00', '',  $value->terima_kunci);
            return $value;
        });
        $blok = Arr::map($blok, function ($value) {
            $value->terima_kunci = $value->terima_kunci ?? 0;
            return $value;
        });

        return view(
            'detail',
            [
                'id_project' => $id_project,
                'project' => $project,
                'fasilitas' => $fasilitas,
                'fasilitasSekitar' => $fasilitasSekitar,
                'blokTersedia' => $groupBlok,
                'bloks' => $blok
            ]
        );
    }
}
