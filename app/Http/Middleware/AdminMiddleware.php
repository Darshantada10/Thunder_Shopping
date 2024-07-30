<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user())
        {
            if(Auth::user()->role != '1')
            {
                return redirect('/home')->with('danger','Access Denied as you are not an admin');
            }
            // dd("true");
        }
        else
        {
            return redirect('/home')->with('warning','Please Login first');
            // dd("false");
        }
        return $next($request);
    }
}
