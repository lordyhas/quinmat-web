<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->segment(1);
        if(!str_contains($lang,"fr")){
            $lang = "fr";

            return Redirect::route(Route::currentRouteName(),["lang"=>$lang]);
        }

        //app()->setLocale($lang);

        URL::defaults(['lang' => $lang]);

        return $next($request);
    }
}
