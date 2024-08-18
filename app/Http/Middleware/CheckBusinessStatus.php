<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckBusinessStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = Auth::user();

        if ($user && $user->business) {
            $business = $user->business;
            dd($business);

            if ($business->status !== $status) {
                // Redirect or return an error response if the business is not active
                return response()->json(['error' => 'Business is not active.'], 403);
            }
        } else {
            // Handle the case where the user or business is not found
            return response()->json(['error' => 'Business not found.'], 404);
        }

        return $next($request);
    }
    
}
