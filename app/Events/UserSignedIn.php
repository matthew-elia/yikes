<?php

namespace App\Events;

use App\Message;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserSignedIn extends Event implements ShouldBroadcast
{
    use SerializesModels;

     public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        // Get message
        $this->message = $message;
    }
    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['message: '.$this->message];
    }
}
