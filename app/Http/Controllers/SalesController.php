<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function searchSales(Request $request)
    {
        $params = $request->get('q', ''); // Ambil input pencarian
        $referral = Sales::getListSales($params); // Pilih kolom yang dibutuhkan
        $referral = collect($referral)->map(function ($reff) {
            return [
                'id_user' => $reff->id_rsp,
                'username' => ucwords(strtolower($reff->username)),
                'designation_id' => $reff->designation_id,
            ];
        })->toArray();
        return response()->json($referral);
    }
}
