<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
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

        if (Schema::hasTable('categories')) {
            View::share('categories', Category::orderBy('name')->get());

            //se non lo vogliamo ordinato in ordine alfabetico
            //View::share('categories', Category::all()-);
        }
        if (Schema::hasTable('articles')) {


            /* se non lo vogliamo ordinato in ordine alfabetico */
            View::share('articles', Article::all());
        }

        // View::composer('*', function ($view) {
        //     $view->with('articlesToReviewCount', Article::toBeRevisedCount());
        // });

        Paginator::useBootstrap();

        //commentato perchè non capiamo che cosa sia
        //...code

    }
}
