<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('extrajs', function () {
            return '<?php ob_start(); ?>';
        });
        Blade::directive('endextrajs', function () {
            return '<?php global $EXTRAJS; $EXTRAJS .= ob_get_contents(); ob_end_clean(); ?>';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
