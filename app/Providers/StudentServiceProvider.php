<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\StudentService;

class StudentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('StudentService', function ($app) {
            return new StudentService;
        });
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
