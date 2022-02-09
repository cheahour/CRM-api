<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\Repositories\Customer\CustomerRepositoryInterface", "App\Repositories\Customer\CustomerRepository");
        $this->app->bind("App\Repositories\User\UserRepositoryInterface", "App\Repositories\User\UserRepository");
        $this->app->bind("App\Repositories\Dashboard\DashboardRepositoryInterface", "App\Repositories\Dashboard\DashboardRepository");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
