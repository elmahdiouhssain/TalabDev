<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;

use App\Models\Contact;
class ContactController extends Controller
{
    //
    public function sendMsg(Request $request){
        // Form validation
       $this->validate($request, [
       'fullname' => 'required|min:4',
       'email' => 'email|max:90',
       'subject' => 'required',
       'message' => 'required',
    ]);
       $msg = new Contact();
       $msg->fullname = $request->input('fullname');
       $msg->email = $request->input('email');
       $msg->subject = $request->input('subject');
       $msg->message = $request->input('message');
       $msg->save();
       //dd($msg);
     return redirect('/')->with('success', 'Message sent with success');
 }
}
