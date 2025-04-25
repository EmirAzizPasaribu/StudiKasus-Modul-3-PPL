<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Enterprise Application Development')
                ->clickLink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'emirkeren123@gmail.com')
                ->type('password', '12345678')
                ->press('LOG IN');
            $browser->visit('/dashboard')
                ->clickLink('Notes')
                ->clicklink('Create Note')
                ->screenshot('modul-3-debug') // lihat hasilnya di tests/Browser/screenshots
                ->assertPathIs('/create-note')
                ->type('title', 'Biodata')
                ->type('description', 'emir aziz pasaribu, 20, bekasi')
                ->press('CREATE')
                ->assertPathIs('/notes');
        });
    }
}
