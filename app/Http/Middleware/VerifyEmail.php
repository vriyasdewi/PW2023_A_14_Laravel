<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyMail
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user's email is verified
            if (Auth::user()->active == 1) {
                return $next($request);
            } else {
                // If the email is not verified, log the user out and redirect to login
                Auth::logout();
                return redirect('/login')->with('error', 'Your email is not verified. Please check your email for verification.');
            }
        }

        // If not authenticated, proceed with the request
        return $next($request);
    }
}
