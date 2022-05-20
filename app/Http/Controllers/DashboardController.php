<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Contact;

class DashboardController extends Controller
{
    //

    public function Showdashboard() {

        $title = "Dashboard";
        return view('dashboard.index', compact('title'));
  
    }

    public function Showmessages() {

        $data['title'] = "All messgaes sent by clients";
        $data['messages'] = Contact::all();
        //$users = DB::table('users')->where('xrole', 'Administrateur')->get();
        return view('dashboard.messages',compact('data'));
  
    }
    public function showMsgbyID($id) {

        $data['message'] = Contact::where('id', $id)->first();
        return view('dashboard.showmessage',compact('data'));
     }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('warning', 'Your session is closed !');
    } 

}
