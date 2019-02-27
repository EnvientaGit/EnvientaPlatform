# ENVIENTA Platform

## laravel quick info ##

### Multilanguage translation ###
- Cretae resource/lang/langCode folder
- Cretae resource/lang/langCode/langFileName.php
 language files (see resource/lang/en folder)

- Use language token in bladeViewer html code:  
```
@lang('langFileName.token')

or

{{__('langFileName.token')}}
```
- Uses language token in controller php code:
```
  $str = __('langFileName.token');
```
- change language code runtime
```
 in app/Htmtp/Middleware /SetLacale.php
 
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
		  
		  // get lang from $_SERVER
		  if ($locale == '?') {
			 $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);		  
		  }
		  
		  // set app locale
        app()->setLocale($locale);
        
        // return and set lang into cookie
        return $next($request)->withCookie('lang',$locale,30);
    }
}

insert SetLocale into Kernel.php

```

### session use in controllers  ###
```
  $session = $request->session();
  $session->getId() return: string
  $session->get('key'[,defValue]) return: value
  $session->put('key', value)
  $session->push('key', array)
  $session->exists('key') return: true|false
  $session->forget('key')
  
```

### database ###
```
use Illuminate\Support\Facades\DB

$paramsArray = ['parname' => value, ....]
$sqlStr = '....  :paramName ......';
DB::statement($sqlStr, $paramsArray)
DB::insert($sqlStr, $paramsArray)
DB::ipdate($sqlStr, $paramsArray)
DB::delete($sqlStr, $paramsArray)
DB::table('tableName')->get()  return arrya of object all record
							 ->where('fieldname', value)  return RecordSet
							 ->where('fieldname,'<=|>=|<|>|=', value]]) return RecordSet
							 ->where([['fieldname,'<=|>=|<|>|=', value], ...]) return RecordSet
							 ->orWhere(....) return RecordSet
							 ->orderBy('fieldName','asc|desc') return RecordSet
							 ->offset(number) return RecordSet
							 ->limit(number) return RecordSet
							 ->insert(['fieldName => value, ....])
							 ->delete() delete all record
							 
							 (see join, group by in https://laravel.com/docs/5.7/queries)
							 
									$recordSet->where(....) return RecorSet
												 ->orWhere(....) return RecordSet
												 ->get() return array of object
												 ->first() return object
												 ->update(['fieldName' => value, ...])	
												 ->delete()						 

DB::transaction(function() {
   DB:: ......
   .....
});

Hibakezelés
try {
......
} cath($e) {
.....
}

```
### controllers and cookie ###
```
file: app/Http/Controllers/<controllerName>.php

<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;

class <ControllerName>Controller extends Controller
{
	protected function  <taskName>($request) {
	
		// cikie value
		$cookieValue = $request->cookie('<cookieName>');
		....
		// GET or POST value
		$param1 = $request->input('param1','defvalue');
		....
		// configuration variable
		$congValue = App::environment('fieldName')
		....
	
		return 'resultStr';
		
		or
		
		return view('<viewName>',paramsArray)

		or
		
		$minutes = 10;
		return response('resultStr')
		   ->header('httpHeaderStr')
		   ->cookie('<cookieName',$cookieValue, $minutes);
		   
		 or
		 
		 return redirect('/.......');  
	}

```

### route  system ###
```
1.  process routes/web.php and breadcumbs.php 
2.  process all app/Http/MiddleWare/*.php
3.  process app/Http/Controllers/<controllerName>.php
```

### viewers syntax  ###
```
file: resources/views/<viewername>.php

return view(.....)

{{-- htmlCode  --}    comment
{{ phpcode }}     can return string exapmple: {{ date('y-m-d') }}
{{ __('<lanFileName>.<token>') }}
{{ url('relativeFromPublic') }}


@if(phpCode)
	htmlCode
@elseif(phpCode)   optional
       htmlCode	        optional
@else                      optional
       htmlCode	        optional 
@endif

@foreach ($array as $item)
	htmlCode   {{ php Code can use $item  }}
@endforeach

@extrajs
	<script type="text/javascript">
		jsCode.
	</script>
@endextrajs

@php
  	phpCode
@endphp

@include('<viewerName>')


{{ csrf_field() }}        echo token in form html code
or 
@csrf
 
```
** Verify CRS token in Middleware **
```
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */https://www.w3schools.com/icons/fontawesome5_intro.asp
    protected $except = [
        'stripe/*',
        'http://example.com/foo/bar',
        'http://example.com/foo/*',
    ];
}
```

## see more ##

[php](http://php.net/manual/en/index.php)
[javascript](https://www.w3schools.com/js/)
[jQuery](https://www.w3schools.com/jquery/)
[bootstrap](https://www.w3schools.com/bootstrap4/)
[mysql](https://dev.mysql.com/doc/)
[Awesome font](https://www.w3schools.com/icons/fontawesome5_intro.asp)
[laravel framework](https://laravel.com/) 
[platform ismertető](https://medium.com/envienta-magyarorsz%C3%A1g/az-envienta-platform-fejleszt%C5%91i-szemmel-180356ed8790?fbclid=IwAR0Rjbpmds7ULq57XCyQwI1Bs5lHeDruazJWpFKTE3TMS-QNiJJ9daU_CjA)
[platform fejlesztői szemmel](https://docs.google.com/document/d/1__SZNh8MCrds1AZ8ylDkegAtn42X4sGWzeiKnnMqMRc/edit?usp=sharing)





