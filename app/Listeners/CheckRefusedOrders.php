<?php

namespace App\Listeners;

use App\Events\OrderStatusUpdated;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

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

        if (!$order) {
            Log::error('Order not found: ' . $event->order->id);
            return; // You can handle this case appropriately, like returning an error response.
        }

        // Get the item_id and user_id from the updated order
        $item_id = $order->item_id;
        $user_id = $order->user_id;

        // Find the user
        $user = User::find($user_id);

        // If the order status is accepted
        if ($order->status === 'accepted') {
            // Update all other orders for the item to "refused"
            Orders::where('item_id', $item_id)
                ->where('id', '!=', $order->id)
                ->update(['status' => 'refused']);
        } else {
            // If the order status is not accepted, make sure there is at least one order with status "accepted"
            $acceptedOrder = Orders::where('item_id', $item_id)
                ->where('status', 'accepted')
                ->first();

            if (!$acceptedOrder) {
                // If no accepted orders found, update the current order to "accepted"
                $order->update(['status' => 'accepted']);
            } else {
                // If there are already accepted orders, update the current order to "refused"
                $order->update(['status' => 'refused']);
            }
        }
    }
}
