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
