<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckDomain
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
        $domain = $request->getHost();

        if ($domain == 'taichinhsmart.vn' || $domain == 'vayvip.local') {
            session()->put('web', 'vi');
        } else if ($domain == 'nowvoucher.com' || $domain == 'en.vayvip.local') {
            session()->put('web', 'en');
        }

        return $next($request);
    }
}
