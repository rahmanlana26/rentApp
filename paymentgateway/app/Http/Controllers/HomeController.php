<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SiteSetting;
use App\Models\Catalog;

class HomeController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::pluck('value', 'key')->toArray();
        $catalogs = Catalog::all();
        return view('landing', compact('settings', 'catalogs'));
    }

    public function track(Request $request)
    {
        $settings = SiteSetting::pluck('value', 'key')->toArray();
        return view('track', compact('settings'));
    }
}
