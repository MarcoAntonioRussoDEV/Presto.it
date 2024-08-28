<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;



class AppServiceProvider extends ServiceProvider
{
    public $languages = [
        "en",
        "it",
        "fr"
    ];
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
        Paginator::useBootstrap();
        View::share('languages', $this->languages);
        if (Schema::hasTable('categories')){
            View::share('categories', Category::orderBy('name')->get());
        }
        session()->put('theme', 'light');

    }
}
