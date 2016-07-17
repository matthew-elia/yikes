<?php

namespace App\Listeners;

use App\Events\SignOutCrossBrowsers;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CrossBrowsersSignedOut
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
     * @param  SignOutCrossBrowsers  $event
     * @return void
     */
    public function handle(SignOutCrossBrowsers $event)
    {
        //
    }
}
