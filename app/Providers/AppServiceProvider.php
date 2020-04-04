<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service;
use App\Team;
use App\Product;
use App\Home;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $services = Service::all();
        View::share('services', $services);
        $teams = Team::all();
        View::share('teams', $teams);
        $products = Product::all();
        View::share('products', $products);
        $homes = Home::firstOrFail();
        View::share('homes', $homes);

    }
}
