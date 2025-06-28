<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class indexMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     // ✅ Check if user is logged in and status == 0
    //     if (!Auth::check() || Auth::user()->status != 0) {
    //         // Not logged in or not an index user
    //         return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
    //     } 
    //     if (Auth::user()->status == 0) {
    //         // User is logged in and status is 0
    //         return redirect()->route('index')->with('success', 'Welcome to the index page!');
    //     }


    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check() || Auth::user()->status != 0) {
            // Not logged in or not status 0 user
            return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
        }

        // ✅ User is logged in and status is 0 — allow the request to continue
        return $next($request);
    }
}
