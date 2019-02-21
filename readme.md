# ENVIENTA Platform

Imagine if people from different fields of expertise worked together to open source everything around us. This way, technological breakthroughs will appear much faster in our daily life, instead of just in patent-protected R&D environments.

For more info, please visit our webpage at: [https://envienta.com/](https://envienta.com/)

## Get started

- Download and install [composer](https://getcomposer.org/)
- In the project root folder run **composer update**
- Copy **env.example** to **.env**
- Run **php artisan key:generate**
- Add the generated key to **.env**, if it isn't added (something like this: APP_KEY=base64:TdBU5kz7nVxQKj2595sWGoBhIlXBYkucdUHZJxrjxvw=)
- Create database in MySQL with utf8_unicode_ci chrset
- Set database in **.env**
- Set your smtp config in **.env**
- Run **php artisan config:cache**
- Run **php artisan migrate:refresh**
- Run **php artisan db:seed** to fill database with test data
- Run **php artisan serve**
- Type **http://127.0.0.1:8000** to your browser. If everythig fine, you will see the front page of the platform.
- Let's start coding, and save the world! 

## Live demo ##

http://platform.envienta.org/

## Code Languages ##
php, javascript

## Framworks ##
jQuery, bootstrap, laravel

## Multilanguage translation ##
- Set resource/lang/langCode/langFileName.php
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
- Set locale runtime in php code:
```  
App::setLocale('langCode');
```