<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Closure;

class LocalizationController extends Controller
{
    public function index()
    {
        $title = "e-solution & e-services";
        return view('home.index', compact('title'));
    }
    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        $title = "e-solution & e-services";
        return view('home.index', compact('title'));
    }
}