<?php

namespace Goodwong\Miniapp;

use Illuminate\Support\ServiceProvider;

class MiniappServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->publishes([
        //     __DIR__.'/config/miniapp.php' => config_path('goodwong-miniapp.php'),
        // ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->mergeConfigFrom(
        //     __DIR__.'/../config/miniapp.php', 'goodwong-miniapp'
        // );
    }
}
