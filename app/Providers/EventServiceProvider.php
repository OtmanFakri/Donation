<?php

namespace App\Providers;

use App\Events\NewMessage;
use App\Events\OrderStatusUpdated;
use App\Listeners\CheckRefusedOrders;
use App\Listeners\SendChatNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // SendChatNotification::class,
        //            CheckRefusedOrders::class,
        \App\Events\NewMessage::class =>[
            SendChatNotification::class,
        ],
        OrderStatusUpdated::class =>[
            CheckRefusedOrders::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(
            [CheckRefusedOrders::class, 'handle']
        );
    }
}
