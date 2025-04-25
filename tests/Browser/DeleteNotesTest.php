<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeleteNotesTest extends DuskTestCase
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
                    ->type('title', 'fakultas rekayasa industri')
                    ->type('description', 'S1 sistem informasi')
                    ->press('CREATE');
            $browser->visit('/notes')
                    ->assertSee('fakultas rekayasa industri')
                    ->press('Delete');

        });
    }
}
