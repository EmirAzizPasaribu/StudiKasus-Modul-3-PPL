<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Enterprise Application Development')
                ->clickLink('Register')
                ->assertPathIs('/register')
                ->type('name', 'Emir Aziz Pasaribu')
                ->type('email', 'emirkeren123@gmail.com')
                ->type('password', '12345678')
                ->type('password_confirmation', '12345678')
                ->press('REGISTER');
        });
    }
}
