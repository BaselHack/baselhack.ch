<?php

namespace Tests\Browser\Frontend;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class EventsSignUpIndexTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    /** @test
     * @group dusk
     */
    public function visit_frontend_events_signup_index()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('frontend.events.signup.index')
                    ->assertRouteIs('frontend.events.signup.index');
        });
    }
}