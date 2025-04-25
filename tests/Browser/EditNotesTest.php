<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditNotesTest extends DuskTestCase
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
                ->clickLink('Notes')
                ->assertSee('Notes')
                ->clickLink('Create Note')
                ->assertPathIs('/create-note')
                ->type('title', 'bogwgejbwg')
                ->type('description', 'sdnknjsn')
                ->press('CREATE');
            $browser->visit('/notes')
                ->clickLink('Edit')
                ->type('title', 'klnsvsvk')
                ->type('description', 'ijhhjhjhjun')
                ->press('UPDATE');
        });
    }
}
