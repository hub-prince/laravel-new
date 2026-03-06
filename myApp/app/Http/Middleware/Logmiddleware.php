<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('3. Middleware executed');

        return $next($request);
    }
}