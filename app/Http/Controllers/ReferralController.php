<?php

namespace App\Http\Controllers;

use App\Models\Referral;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function searchReferral(Request $request)
    {
        $params = $request->get('q', ''); // Ambil input pencarian
        $referral = Referral::getListReferral($params); // Pilih kolom yang dibutuhkan
        $referral = collect($referral)->map(function ($reff) {
            return [
                'id_user' => $reff->id_rsp,
                'username' => ucwords(strtolower($reff->username)),
            ];
        })->toArray();
        return response()->json($referral);
    }
}
