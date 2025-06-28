<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PosMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (!Auth::guard('employee')->check() || Auth::guard('employee')->user()->status != 0) {
            return redirect()->route('employeLogin')->with('error', 'You are not authorized to access this page.');
        }
        return $next($request);
    }
}
