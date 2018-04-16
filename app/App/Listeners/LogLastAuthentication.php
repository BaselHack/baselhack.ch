<?php

namespace App\App\Listeners;

use Illuminate\Auth\Events\Login;

class LogLastAuthentication
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     *
     * @return void
     */
    public function handle(Login $event)
    {
        $event->user->last_authentication = date('Y-m-d H:i:s');
        $event->user->save();
    }
}