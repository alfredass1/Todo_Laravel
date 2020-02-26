<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Gate;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Gate::define('edit', function ($user, $task) {
            return $user->id == $task->userID;

        });

        Gate::define('delete', function ($user, $task) {
            return $user->id == $task->userID;

        });
    }
}
