<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootRepositories();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function bootRepositories()
    {

        $this->app->bind('App\Repositories\DairyRepositoryInterface', 'App\Repositories\DairyRepository');

        
    }

}
