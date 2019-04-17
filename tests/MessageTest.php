<?php

namespace Djmitry\Message\Tests;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MessageTest extends DuskTestCase
{
    public function testFrontend()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->screenshot('Главная')
                ->assertSee('Мои работы');
        });
    }
}
