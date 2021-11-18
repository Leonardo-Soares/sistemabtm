<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendingMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(Request $request)
    {   
        $message = $request->session()->get('message');
        return view('/', ['message'=> $message]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );
        
        Mail::to('leolass1010@gmail.com')->send(new sendingMail($data));
        $request->session()->flash('message', 'Obrigado');
        return redirect('/');
    }
}
