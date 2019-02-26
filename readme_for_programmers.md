# ENVIENTA Platform

## Multilanguage translation ##
- Cretae resource/lang/langCode folder
- Cretae resource/lang/langCode/langFileName.php
 language files (see resource/lang/en folder)

- Set language code in config/app.php
```
    'locale' => 'langCode',

```
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
## laravel quick info ##

### session ###
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

```
### controllers and cookie ###
```
file: app/Http/Controllers/controllerName.php

<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;

class <ControllerName>Controller extends Controller
{
	protected function  <taskName>($request) {
	
		$cookieValue = $request->cookie('<cookieName>');
		....
		$param1 = $request->input('param1','defvalue');
	
		return 'resultStr';
		
		or
		
		return view('<viewName>',paramsArray)

		or
		
		$minutes = 10;
		return response('resultStr')
		   ->header('httpHeaderStr')
		   ->cookie('<cookieName',$cookieValue, $minutes);
	}

```

### root  system ###
```
1.  process routes/web.php and breadcumbs.php ----> <ControllerName>
2. app/Http/MiddleWare/*.php
3. app/Http/Controllers/<controllerName>.php
```