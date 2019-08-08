<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class CheckAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $type)
    {
        if (!Auth::check()) {
            return Redirect::to('login');
        }
        $user = Auth::user();
        if ($user->identity !== $type) {
            return Redirect::to('login');
        }

        return $next($request);
    }
}
