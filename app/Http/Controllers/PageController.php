<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function tariffBasic()
    {
        return view('tariff.basic');
    }

    public function tariffStandard()
    {
        return view('tariff.standard');
    }

    public function tariffPremium()
    {
        return view('tariff.premium');
    }   
}
