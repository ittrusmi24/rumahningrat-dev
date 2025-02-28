<?php

namespace App\Http\Controllers;

use App\Models\Project;
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
            if(isset($position->countryName)){
                $countryName = $position->countryName;
            }else{
                $countryName = 'Unknown';
            }
            if(isset($position->regionName)){
                $regionName = $position->regionName;
            }else{
                $regionName = 'Unknown';
            }
            if(isset($position->cityName)){
                $cityName = $position->cityName;
            }else{
                $cityName = 'Unknown';
            }
        } else {
            $countryName = 'Unknown';
            $regionName = 'Unknown';
            $cityName = 'Unknown';
            // Failed retrieving position.
        }
        if($userAgent != 'Uptime-Kuma/1.23.16'){
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
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function vt_view()
    {
        $url = strip_tags(urldecode(request()->fullUrl()));
        $userAgent = request()->userAgent();
        $ip = request()->ip();

        if ($position = Location::get($ip)) {
            // Successfully retrieved position.
            if(isset($position->countryName)){
                $countryName = $position->countryName;
            }else{
                $countryName = 'Unknown';
            }
            if(isset($position->regionName)){
                $regionName = $position->regionName;
            }else{
                $regionName = 'Unknown';
            }
            if(isset($position->cityName)){
                $cityName = $position->cityName;
            }else{
                $cityName = 'Unknown';
            }
        } else {
            $countryName = 'Unknown';
            $regionName = 'Unknown';
            $cityName = 'Unknown';
            // Failed retrieving position.
        }
        if($userAgent != 'Uptime-Kuma/1.23.16'){
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
        return view('virtual_tour.rn_jayasampurna');
    }
    public function poi_view($id_project)
    {
        $project = Project::get_project_additional($id_project);
        $url = strip_tags(urldecode(request()->fullUrl()));
        $userAgent = request()->userAgent();
        $ip = request()->ip();

        if ($position = Location::get($ip)) {
            // Successfully retrieved position.
            if(isset($position->countryName)){
                $countryName = $position->countryName;
            }else{
                $countryName = 'Unknown';
            }
            if(isset($position->regionName)){
                $regionName = $position->regionName;
            }else{
                $regionName = 'Unknown';
            }
            if(isset($position->cityName)){
                $cityName = $position->cityName;
            }else{
                $cityName = 'Unknown';
            }
        } else {
            $countryName = 'Unknown';
            $regionName = 'Unknown';
            $cityName = 'Unknown';
            // Failed retrieving position.
        }
        if($userAgent != 'Uptime-Kuma/1.23.16'){
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
        return view('virtual_tour.'.$project->poi);
    }
}
