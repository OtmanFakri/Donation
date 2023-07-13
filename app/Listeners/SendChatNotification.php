<?php

namespace App\Listeners;

use App\Events\NewMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendChatNotification
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
     * @param  \App\Events\NewMessage  $event
     * @return void
     */
    public function handle(NewMessage $event)
    {
        //
        $chat = $event->msg;

        Mail::send('emails.new_Message', ['Chat' => $chat], function ($message) use ($chat) {
            $message->to($chat->item->user->email)
                ->subject('New Item Added: '.$chat->item->name);
            print "Event has been sent!";
        });

    }
}
