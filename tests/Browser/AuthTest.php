<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
/* 
Logout: 
   ->click('a.nav-link'); 
*/
class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLoginAuthentication()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'dubuque.vernon@example.net')
                    ->type('password', 'password')
                    ->click('button[type="submit"]')
                    ->assertSee('Products') 
                    ->visit('/videos')
                    ->click('div[id="vjs_video_3"]')
                    ->click('.nav-icon.fas.fa-power-off');
        });
    }
}

