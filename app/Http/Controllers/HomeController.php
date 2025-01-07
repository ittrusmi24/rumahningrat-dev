<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function vt_view()
    {
        return view('virtual_tour.rn_jayasampurna');
    }
    public function poi_view()
    {
        return view('virtual_tour.poi_rn_jayasampurna');
    }
}
