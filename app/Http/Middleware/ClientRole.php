<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientRole
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next){
        if (!\Auth::check()) // I included this check because you have it, but it really should be part of your 'auth' middleware, most likely added as part of a route group.
            return redirect('login');
    
        $user = \Auth::user();
    
        if($user->isClient())
            return $next($request);
    
        return redirect('login');
}
}