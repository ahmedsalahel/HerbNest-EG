<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\View\View as MyView;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        View::composer('layouts.dashLayout.header', function (MyView $view) {
            return $view->with(['cuurentDate' => Carbon::now()->toDateTimeString()]);
        });
    }
}
