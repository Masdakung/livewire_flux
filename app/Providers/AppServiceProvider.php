<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;

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
        // $getUrls = $request->url();
        // echo "AppServiceProvider";
        // echo "get:>".$getUrls;
        // if(str_contains($request->getHost(), 'ngrok-free.app')){
        //     // echo "APP_ENV:>";
        //     URL::forceScheme('https');
        // }
        
    }
}
