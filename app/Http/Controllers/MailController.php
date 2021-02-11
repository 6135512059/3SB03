<?php

namespace App\Http\Controllers;

use App\Models\Lain;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{   
    public function basic_email() {
        $data = array('name'=> $_GET['name'] ,'m' =>  $_GET['message']);
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to($_GET['email'], $_GET['name'])->subject
              ($_GET['subject']);
           $message->from('s6135512059@phuket.psu.ac.th','patiparn');
        });
        echo "Email sent.61355120159 to "  .$_GET['email'] ." .";
    }
    // public function create(){
    //     return view('mail');
    // }
    // public function Getdata(Request newdata){   
    // }
    // public function basic_email(){
    //     $data = array('name'=>"patiparn");

    //     Mail::send(['text'=>'mail'],$data ,function($message){
    //         $message->to('s5935512088@phuket.psu.ac.th','ToTid')->subject('Laravel Basic Testing Mail');
    //         $message->from('s6135512059@phuket.psu.ac.th','patiparn');
    //     });
    //     echo "Basic Email sent. check your inbox.";
    // }
}
