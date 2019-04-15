<?php

namespace Djmitry\Message;

use Illuminate\Http\Request;

class Message
{
    const SUCCESS_TYPE = 'success';

    public function add(Request $request, string $message, string $type = SUCCESS_TYPE) 
    {
        $data = $request->session()->get('alert-messages');
        $data[] = compact('type', 'message');
        $request->session()->flash('alert-messages', $data);
    }

    public function show() 
    {
        $data = $request->session()->get('alert-messages');
        dd($data);
    }
}