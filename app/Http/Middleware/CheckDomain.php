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
        } else if ($domain == 'nowvoucher.com') {
            session()->put('web', 'sg');
        } else if ($domain == 'my.nowvoucher.com' || $domain == 'en.vayvip.local') {
            session()->put('web', 'my');
        } else if ($domain == 'ph.nowvoucher.com') {
            session()->put('web', 'ph');
        } else if ($domain == 'id.nowvoucher.com') {
            session()->put('web', 'id');
        } else if ($domain == 'th.nowvoucher.com') {
            session()->put('web', 'th');
        }

        return $next($request);
    }
}
