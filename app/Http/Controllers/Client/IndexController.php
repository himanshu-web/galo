<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        return view('client/index');
    }

    public function About()
    {
        return view('client/about');
    }

    public function CentralExecutive()
    {
        return view('client/central_executive');
    }

    public function DistrictExecutive()
    {
        return view('client/district_executive');
    }

    public function WomenWings()
    {
        return view('client/women_wings');
    }

    public function Song()
    {
        return view('client/song');
    }

    public function GaloMla()
    {
        return view('client/galo_mla');
    }

    public function Contact()
    {
        return view('client/contact');
    }
}
