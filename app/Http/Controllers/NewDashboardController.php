<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewDashboardController extends Controller
{
    //
    public function index(){
        return view('redesign.layout.app');
    }
    public function detail(){
        return view('redesign.detail');
    }
}
