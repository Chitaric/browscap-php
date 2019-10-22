<?php
namespace BrowscapPHP;

use Illuminate\Support\ServiceProvider;

/* Laravel framework facades */
use Log;
use Cache;

class BrowscapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            //
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Browscap::class, function ($app) {
            return new Browscap(Cache::driver(), Log::driver());
        });
    }
}
