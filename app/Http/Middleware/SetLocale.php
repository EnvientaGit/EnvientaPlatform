<?php

namespace App\Http\Middleware;

use Closure;

/**
* process multilanguage in runtime
*/
class SetLocale {
    public function handle($request, Closure $next)  {
    	  // get lang from cookie
        $locale = $request->cookie('lang','?');
        
        // overwrite lang from URL params
		  if ($request->input('lang','') != '') {
				$locale = $request->input('lang','');
		  }
		  
		  // if not defined then get lang from $_SERVER
		  if ($locale == '?') {
			 $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);		  
		  }
		  
		  // set app locale
        app()->setLocale($locale);
        
        // return and set lang into cookie
        return $next($request)->withCookie('lang',$locale,30);
    }
}

