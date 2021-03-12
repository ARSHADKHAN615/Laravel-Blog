<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class admin_auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (!$request->session()->has('BLOG_USER_ID')) {
            return redirect("admin/login");
        }
        return $next($request);
    }
}
