<?php

namespace App\Http\Controllers;

use App\Models\Referral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferralController extends Controller
{
    public function searchReferral(Request $request)
    {
        $params = $request->get('q', ''); // Ambil input pencarian
        $referral = Referral::getListReferral($params); // Pilih kolom yang dibutuhkan
        $referral = collect($referral)->map(function ($reff) {
            return [
                'kode_referral' => $reff->kode_referral,
                'referral_name' => ucwords(strtolower($reff->referral_name)),
            ];
        })->toArray();
        return response()->json($referral);
    }
}
