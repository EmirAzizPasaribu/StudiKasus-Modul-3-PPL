<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogOutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'emirkeren123@gmail.com')
                    ->type('password', '12345678')
                    ->press('LOG IN');
            $browser->visit('/dashboard')
            ->click('#click-dropdown')
            ->screenshot('logout-test');
        });
    }
}
