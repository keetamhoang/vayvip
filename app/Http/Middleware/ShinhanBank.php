<?php

namespace App\Http\Middleware;

use Closure;

class ShinhanBank
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth('admin')->check()) {
            if (auth('admin')->user()->type != 'shinhanbank' and auth('admin')->user()->type != 'admin' and auth('admin')->user()->type != 'mod') {
                abort(403);
            }
        }

        return $next($request);
    }
}
