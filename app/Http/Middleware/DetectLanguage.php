<?php

namespace Multilang\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Multilang\Languages;

class DetectLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (!isset($_COOKIE['usersLanguage'])) {
            if (Auth::guard($guard)->check()) {
                $lang = Auth::user()->language->code;
            } else {
                if ($lang = $_SERVER['HTTP_ACCEPT_LANGUAGE']) {
                    $lang = substr($lang,0,2);
                }
            }
            setcookie('usersLanguage', $lang);
        } else {
            $lang = $_COOKIE['usersLanguage'];
        }
        if (Languages::hasLang($lang))
            app()->setLocale($lang);

        return $next($request);
    }
}
