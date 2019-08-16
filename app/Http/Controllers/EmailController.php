<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
  public function basic_email(Request $request)
  {
    // dd($request->all());
    $data = [
      'name' => $request->name,
      'email' => $request->email,
      'subject' => $request->subject,
      'msg' => $request->message,
    ];

    Mail::send('mail', $data, function ($message) {
      $message->to('hoangphuong0011@gmail.com', 'Hoang Phuong')->subject('Inquiry from hoanggia.asia');
      $message->from('lequochungcdt@gmail.com', 'Info');
    });
    // echo "HTML Email Sent. Check your inbox.";
    return response()
      ->json(['success' => 'true', 'msg' => 'Successed']);
  }
}
