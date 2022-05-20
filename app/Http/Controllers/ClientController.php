<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function Showdclientdash() {

        $title = "Dashboard Clients";
        return view('clients.index', compact('title'));
  
    }
}
