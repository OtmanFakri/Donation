<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CheckCoins
{

    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->Coins < 2) {
            return response()->json(['message' => 'Insufficient coins.'], 403);
        }
        $user->Coins -= 2;
        $user->save();
        return $next($request);
    }
}
