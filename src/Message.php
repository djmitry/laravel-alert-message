<?php

namespace Djmitry\Message;

use Illuminate\Http\Request;

class Message
{
    const SUCCESS_TYPE = 'success';
    const ERROR_TYPE = 'danger';

    public static function add(string $message, string $type = self::SUCCESS_TYPE) 
    {
        $data = request()->session()->get('alert-messages');
        $data[] = compact('type', 'message');
        request()->session()->flash('alert-messages', $data);
    }

    public static function show() 
    {
        $data = request()->session()->get('alert-messages');

        if ($data) {
            echo view('Message::message', ['messages' => $data]);
        }
        return true;
    }
}