<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventRequestsDuringMaintenance
{
    public function handle(Request $request, Closure $next)
    {
        if (app()->isDownForMaintenance()) {
            return response('Service Unavailable', Response::HTTP_SERVICE_UNAVAILABLE);
        }
        return $next($request);
    }
}
