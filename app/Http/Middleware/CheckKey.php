<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckKey
{
    public function handle(Request $request, Closure $next)
    {
        $key = $request->input('key');

        if ($key!== 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie') {
            return response()->json(['error' => 'Invalid key'], 401);
        }

        return $next($request);
    }
}