<?php

namespace App\Listeners;

use App\Events\UserSignedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SignOutExistingUserSessions
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
     * @param  UserSignedIn  $event
     * @return void
     */
    public function handle(UserSignedIn $event)
    {
        //
    }
}
