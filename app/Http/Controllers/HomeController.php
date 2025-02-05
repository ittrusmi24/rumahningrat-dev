<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index()
    {
        $url = strip_tags(urldecode(request()->fullUrl()));
        $userAgent = request()->userAgent();
        $ip = request()->ip();

        if ($position = Location::get($ip)) {
            // Successfully retrieved position.
            $countryName = $position->countryName;
        } else {
            $countryName = 'Unknown';
            // Failed retrieving position.
        }
        Visitor::create([
            'url' => urldecode($url),
            'user_agent' => $userAgent,
            'ip' => $ip,
            'countryName' => $countryName,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        return view('home');
    }

    public function vt_view()
    {
        $url = strip_tags(urldecode(request()->fullUrl()));
        $userAgent = request()->userAgent();
        $ip = request()->ip();
        Visitor::create([
            'url' => urldecode($url),
            'user_agent' => $userAgent,
            'ip' => $ip,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        return view('virtual_tour.rn_jayasampurna');
    }
    public function poi_view()
    {
        $url = strip_tags(urldecode(request()->fullUrl()));
        $userAgent = request()->userAgent();
        $ip = request()->ip();
        Visitor::create([
            'url' => urldecode($url),
            'user_agent' => $userAgent,
            'ip' => $ip,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        return view('virtual_tour.poi_rn_jayasampurna');
    }
}
