<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'message' => 'required',
        ]);

        $data = [
          'email' => $request->email,
          'messageT' => $request->message
        ];

   /*      Mail::send('test.qqriq@gmail.com', $data, function($message) use ($data) {
          $message->to($data['email']);
        }); */

        Mail::send('email-template', $data, function ($message) use ($request) {
          $message->to('test.qqriq@gmail.com', 'Receiver Name')
              ->from($request->email)
              ->subject('Pet Zoona');
      });
        return redirect()->back()->with(['message' => 'Email successfully sent!']);

    }
}