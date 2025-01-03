<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function detail(Request $request)
    {
        // if($request->id_project){
        // return 
        // }
        return view('detail');
    }
}
