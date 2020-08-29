<?php

namespace App\Http\Middleware;

use App\JVZIPN\JVZIPN;
use Closure;

class JVZIPNCVerify
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
        if(!JVZIPN::jvzipnVerification($request->all()))
        {
            return response()->json([
                'success' => false
            ], 500);
        }
        return $next($request);
    }
}
