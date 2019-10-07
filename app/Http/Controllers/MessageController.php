<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messages;
use SmoDav\Mpesa\C2B\STK;

class MessageController extends Controller
{
    //
    public function save(Request $request){
       // print_r($req->input());
        $msg = new messages();
        $msg->fname = request('fname');
        $msg->lname = request('lname');
        $msg->email = request('email');
        $msg->subject = request('subject');
        $msg->message= request('message');
        //print($msg);
        $msg->save();
        return redirect('/contact');

     }
}
