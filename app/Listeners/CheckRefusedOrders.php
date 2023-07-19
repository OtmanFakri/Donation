<?php

namespace App\Listeners;

use App\Events\OrderStatusUpdated;
use App\Models\Orders;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CheckRefusedOrders
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
     * @param  \App\Events\OrderStatusUpdated  $event
     * @return void
     */
    public function handle(OrderStatusUpdated $event)
    {
        $order = $event->order;
        $item_id = $order->item_id;
        $user_id = $order->user_id;

        // Find other orders with the same item and user that have a status of "refused"
        $refusedOrders = Orders::where('item_id', $item_id)
            ->where('user_id', $user_id)
            ->where('status', 'refused')
            ->get();

        // Update the status of refused orders to "pending" or any other appropriate status
        foreach ($refusedOrders as $refusedOrder) {
            $refusedOrder->update(['status' => 'pending']);
        }
    }
}
