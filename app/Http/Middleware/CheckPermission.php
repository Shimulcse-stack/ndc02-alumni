<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    public function handle(Request $request, Closure $next, $permission): Response
    {
        if (!auth()->check() || !auth()->user()->can($permission)) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}

