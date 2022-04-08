<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use jeremykenedy\LaravelRoles\Models;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
     app()->bind('check-roles', function ($value='')
     {
        $user=Auth::user()->id;
        $result=Role::find($user);


     });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
         Schema::defaultStringLength(191);
    }
}
