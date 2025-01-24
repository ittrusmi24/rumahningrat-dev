<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function searchKelurahan(Request $request)
    {
        $params = $request->get('q', ''); // Ambil input pencarian
        $kelurahan = Lokasi::getLokasi($params); // Pilih kolom yang dibutuhkan
        $kelurahan = collect($kelurahan)->map(function ($kel) {
            return [
                'id_kelurahan' => $kel->id_kelurahan,
                'kelurahan' => ucwords(strtolower($kel->kelurahan)),
                'kecamatan' => ucwords(strtolower($kel->kecamatan)),
                'kota' => ucwords(strtolower($kel->kota)),
            ];
        })->toArray();
        return response()->json($kelurahan);
    }
}
