<?php

namespace App\Http\Middleware;

use App\Models\Item;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CheckItemOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $itemId = $request->route('order');
        $user = $request->user();

        $item = Item::find($itemId)->first();

        if (!$item || $item->user_id !== $user->id) {
            $errorMessage = 'You are not authorized to perform this action.';
            return new JsonResponse(['error' => $errorMessage], 403); // Return a JSON error response with HTTP status code 403 (Forbidden).
        }


        return $next($request);
    }

}
