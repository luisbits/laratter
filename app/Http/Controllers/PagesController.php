<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $messages = [
            [
                'id' => 1,
                'content' => 'Esto es un mensaje',
                'image' => 'http://lorempixel.com/600/338?1'
            ],
            [
                'id' => 2,
                'content' => 'Esto es otro mensaje',
                'image' => 'http://lorempixel.com/600/338?2'
            ],
            [
                'id' => 3,
                'content' => 'Esto es el mensaje 3',
                'image' => 'http://lorempixel.com/600/338?3'
            ],
            [
                'id' => 4,
                'content' => 'Esto es el último mensaje',
                'image' => 'http://lorempixel.com/600/338?4'
            ],
        ];
        return view('welcome',[
            'messages' => []
        ]);
    }
}
