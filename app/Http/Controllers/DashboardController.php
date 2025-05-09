<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Number;
use Illuminate\Support\Arr;
use App\Models\Fasilitas;
use App\Models\FasilitasSekitar;
use App\Models\Project;
use App\Models\BlokTersedia;
use App\Models\Lokasi;
use App\Models\Pekerjaan;
use App\Models\Ulasan;
use App\Models\Visitor;
use App\Models\Voucher;
use Stevebauman\Location\Facades\Location;

use function PHPSTORM_META\map;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function detail(Request $request)
    {
        $url = strip_tags(urldecode(request()->fullUrl()));
        $userAgent = request()->userAgent();
        $ip = request()->ip();

        if ($position = Location::get($ip)) {
            // Successfully retrieved position.
            if (isset($position->countryName)) {
                $countryName = $position->countryName;
            } else {
                $countryName = 'Unknown';
            }
            if (isset($position->regionName)) {
                $regionName = $position->regionName;
            } else {
                $regionName = 'Unknown';
            }
            if (isset($position->cityName)) {
                $cityName = $position->cityName;
            } else {
                $cityName = 'Unknown';
            }
        } else {
            $countryName = 'Unknown';
            $regionName = 'Unknown';
            $cityName = 'Unknown';
            // Failed retrieving position.
        }

        if ($userAgent != 'Uptime-Kuma/1.23.16') {
            Visitor::create([
                'url' => urldecode($url),
                'user_agent' => $userAgent,
                'ip' => $ip,
                'countryName' => $countryName,
                'regionName' => $regionName,
                'cityName' => $cityName,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        }
        $id_project = $request->id_project;
        if (!$id_project) {
            return redirect()->route('home');
        }
        
        // if(!in_array($id_project, [70,40,68])){
        //     return redirect()->route('home');
        // }


        $project = Project::get_project_by_id($id_project);

        $project_add = Project::get_project_additional($id_project);

        // kalau tidak ada project additional maka pakai yang jayasampurna dulu biar tidak error
        if (empty($project_add)) {
            $project_add = Project::get_project_additional(70);
        }
        $fasilitas = Fasilitas::get_fasilitas_by_id_project($id_project);
        $fasilitasSekitar = FasilitasSekitar::get_fasilitas_sekitar_by_id_project_grouped($id_project);
        $blok = BlokTersedia::get_blok_by_id_project($id_project);
        $groupBlok = BlokTersedia::get_grup_blok_by_id_project($id_project);
        $ulasan = Ulasan::get_ulasan_by_id_project($id_project);
        $kota = Lokasi::getKota();
        // $lokasi = Lokasi::getLokasi();
        // dd($blok);
        $groupBlok = Arr::map($groupBlok, function ($value) {
            $value->terima_kunci = Number::currency($value->terima_kunci ?? 0, in: 'IDR', locale: 'id_ID');
            $value->terima_kunci = str_replace(',00', '',  $value->terima_kunci);
            return $value;
        });
        $blok = Arr::map($blok, function ($value) {
            $value->terima_kunci = $value->terima_kunci ?? 0;
            return $value;
        });
        // dd($blok);

        // $path = public_path('360_view/vt/'.$project_add->link_360.'/index.htm');  // Ambil path dari link_360
        // if (!file_exists($path)) {
        //     abort(404, 'Virtual tour not found');  // Tampilkan error jika file tidak ada
        // }
        // $content = file_get_contents($path);
        // $content = str_replace('../', url('/') . '/360_view/vt/' . $project_add->link_360.'/', $content);
        // return view('virtual_tour', ['project' => $project, 'content' => $content]);
        $quota = Voucher::checkQuota(date('Y-m'), $id_project);
        $pekerjaan = Pekerjaan::all();
        return view(
            'detail',
            [
                'id_project' => $id_project,
                'project' => $project,
                'fasilitas' => $fasilitas,
                'fasilitasSekitar' => $fasilitasSekitar,
                'blokTersedia' => $groupBlok,
                'bloks' => $blok,
                'ulasan' => $ulasan,
                'project_add' => $project_add,
                'kotas' => $kota,
                'max_quota' => isset($quota) ? $quota->max_quota : 0,
                'jml_klaim' => isset($quota) ? $quota->jml_klaim : 0,
                'lokasis' => [],
                'pekerjaan' => $pekerjaan
                // 'content'=>$content
            ]
        );
    }
    public function status_blok($id_project)
    {

        $blok = BlokTersedia::get_blok_status_double_book($id_project);
        // $blok = BlokTersedia::get_blok_status($id_project);
        return response()->json($blok);
    }
}
