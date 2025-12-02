<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;

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
        if (!App::runningInConsole()) {
            try {
                view()->share('categories', Category::get());
            } catch (\Throwable $e) {
                view()->share('categories', collect());
            }
        }
        Paginator::useBootstrap();
    }
}
