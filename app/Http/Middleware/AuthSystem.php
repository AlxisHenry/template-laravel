<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\Response;
use \Illuminate\Http\RedirectResponse;

class AuthSystem
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {

        /*
         * This middleware is used for the authentication system
         * */

        if (Auth::check() && (\Request::route()->getName() === "auth.register" || \Request::route()->getName() === "auth.login")) {
            # If auth checked and user try to access to Sign-in/Sign-up routes :
            return abort('404');
        }

        # Continue user request
        return $next($request);

    }

}
