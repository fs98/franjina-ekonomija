<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Blogger
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
      if ($request->user()->role == 4) {
        abort(404);
      } else {
        return $next($request);
      }
    }
}
