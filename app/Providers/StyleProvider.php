<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StyleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //--- Check Route and add data- Example: data-content='data-content' ----
        Request::macro('isRoute', function ($patterns, $call=null) {
            
            if(!$patterns) return false;

            if(!is_array($patterns)){
                $patterns = [$patterns];
            }

            $is_match = Str::is($patterns, $this->route()->getName());
            if($is_match){
                return (!empty($call)) ? $call : $is_match;
            }

        });
    //---/Check Route and add data- ----
    }
}
