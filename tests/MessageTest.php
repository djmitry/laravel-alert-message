<?php

namespace Djmitry\Message\Tests;

use Tests\TestCase;
use Djmitry\Message\Message;
use Illuminate\Support\Facades\Auth;

class MessageTest extends TestCase
{
    public function testHasElement()
    {
        $this->withSession(['1'])->get('/');
        Message::add('test');
        $data = request()->session()->get('alert-messages');
        $result = (bool) count($data);
        $this->assertTrue($result);
    }

    public function testHasTwoElements()
    {
        $this->withSession(['1'])->get('/');
        Message::add('test');
        Message::add('test2');
        $data = request()->session()->get('alert-messages');
        $result = count($data);
        $this->assertTrue($result === 2);
    }

    public function testShow()
    {
        $this->withSession(['1'])->get('/');
        Message::add('test');
        $result = Message::show();
        $this->assertTrue($result);
    }
}
