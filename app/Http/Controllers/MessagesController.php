<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;
use App\Message;

class MessagesController extends Controller
{
    public function show(Message $message)
    {

        return view('message.show',[
            'message' => $message
        ]);
    }

    public function create(CreateMessageRequest $request)
    {
        $user = $request->user();

        $message = Message::create([
            'content' => $request->input('message'),
            'image' => 'https://placeimg.com/640/480/any',
            'user_id' => $user->id
        ]);

        return redirect('messages/'.$message->id);
    }
}
