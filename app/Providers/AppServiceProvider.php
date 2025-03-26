<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Blade::directive('addLineBreaks', function ($expression) {
            return "<?php 
                echo preg_replace('/((?:\S+\s*){4})/u', '\$1<br>', $expression, 1); 
            ?>";
        });
    }
}
