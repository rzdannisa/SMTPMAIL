<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SMTPController extends Controller
{
    public function viewForm()
    {
      return view('email');
    }
 
    public function send_mail(Request $x)
    {
        $email = $x->input('email');
        $subject = $x->input('subject');
        $html = $x->input('pesan');

      try {
        $a = new \PHPMailer(true);
        $a->isSMTP();
        $a->CharSet = "utf-8";
        $a->SMTPAuth = true;
        $a->SMTPSecure="tls";
        $a->Host = "smtp.gmaill.com";
        $a->Port = 587;
        $a->Username="rizda25.9c@gmail.com";
        $a->Password="1ncorrect";
        $a->SetFrom("rizda25.9c@gmail.com","Rizda");
        $a->Subject = $subject;
        $a->MsgHTML($html);
        $a->addAddress($email);
        $a->send();

        return redirect(url('email'));
    } catch (Exception $e) {
        dd($e);
        }
 
    }

    public function email()
    {
        return view('email');
    }
}