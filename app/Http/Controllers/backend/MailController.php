<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send_mail(){
        //send mail
               $to_name = "Minh Văn";
               $to_email = "bluroller161@gmail.com";//send to this email
              
            
               $data = array("name"=>"Mail từ tài khoản Khách hàng","body"=>'Mail gửi về vấn về hàng hóa'); //body of mail.blade.php
               
               Mail::send('frontend.mail.send_mail',$data,function($message) use ($to_name,$to_email){

                   $message->to($to_email)->subject('Test thử gửi mail google');//send this mail with subject
                   $message->from($to_email,$to_name);//send from this mail

               });
               // return redirect('/')->with('message','');
               //--send mail
   }
}
