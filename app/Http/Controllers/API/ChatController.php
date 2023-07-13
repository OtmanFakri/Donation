<?php

namespace App\Http\Controllers\API;

use App\Events\NewMessage;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:api');
    }

    function index()
    {
        $user = auth()->user();

        $chats = $user->Chat;
        $itemIds = $user->chat->pluck('item_id');

        return response()->json([
            'chats' => $chats,
            'items' => Item::find($itemIds),
        ]);
    }
    function store()
    {
        $user = auth()->user();
        $data = request()->validate([
            'message' => 'required',
            'item_id' => 'required',
        ]);
        $data['user_id'] = $user->id;
        $chat = $user->Chat()->create($data);

        //Dispatching the event
        event(new NewMessage($chat));


        return response()->json($chat, 201);
    }
}
