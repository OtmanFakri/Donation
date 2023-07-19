<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Orders;
use Illuminate\Http\Response;
use Illuminate\Http\Request;


class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(){
        $user = auth()->user();
        $orders = $user->orders;
        $itemIds = $user->orders->pluck('item_id');
        return response()->json([
            'orders' => $orders,
            'items' => Item::find($itemIds),
        ]);
    }
    public function store(){
        $user = auth()->user();
        $data = request()->validate([
            'item_id' => 'required',
        ]);
        $data['user_id'] = $user->id;
        $order = $user->orders()->create($data);
        return response()->json($order, 201);
    }


    public function show(Item $item)
    {
        $user = auth()->user();

        $order = Orders::where('user_id', 2)
            ->where('item_id', $item->id)
            ->first();

        if (!$order) {
            return response()->json(['message' => 'Order not found for this item.'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($order, 200);
    }
    public function receivedOrders()
    {
        $user = auth()->user();

        $receivedOrders = $user->items()->with('orders')->get()->pluck('orders')->flatten();

        return response()->json($receivedOrders, Response::HTTP_OK);
    }

    public function updateStatus(Request $request, Orders $order)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:pending,accepted,refused',
        ]);

        $order->update(['status' => $validatedData['status']]);

        return response()->json(['message' => 'Order status updated successfully'], Response::HTTP_OK);
    }
}
