<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class PagesController extends Controller
{
    public function home()
    {
        $messages = Message::paginate(5);

        return view('welcome',[
            'messages' => $messages
        ]);
    }
}
