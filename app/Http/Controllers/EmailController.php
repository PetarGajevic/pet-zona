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
          'message' => $request->message
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email']);
        });
        
        return back()->with(['message' => 'Email successfully sent!']);
    }
}