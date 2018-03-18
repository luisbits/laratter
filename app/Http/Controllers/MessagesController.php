<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;
use App\Message;

class MessagesController extends Controller
{
    public function show(Message $message)
    {
        //$message = Message::find($id);

        return view('message.show',[
            'message' => $message
        ]);
    }

    public function create(CreateMessageRequest $request)
    {
        dd($request->all());
    }
}
