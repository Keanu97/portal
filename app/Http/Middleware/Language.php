<?php

namespace App\Http\Middleware;

use Closure;

class Language
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
        if(session()->has('applocale') && array_key_exists(session('applocale'), config('language.languages')))
        {
            app()->setLocale(session('applocale'));
        }

        return $next($request);
    }
}
