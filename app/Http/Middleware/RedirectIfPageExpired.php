<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfPageExpired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        // dd($response->getStatusCode());
        // Check if the response status code is 419 (Page Expired)
        if ($response->getStatusCode() == 419) {
            // Redirect to the login page with an appropriate message
            return redirect()->route('login')->with('message', 'Your session has expired. Please log in again.');
        }

        return $response;
    }
}
