<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
use App\Manufacture;
use App\Slider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer('frontend.sidebar',function($view){
            $categories = Category::all();
            $brands = Manufacture::all();
            $view->with(['categories'=>$categories,'brands'=>$brands]);
        });
        view::composer('frontend.header',function($view){
            $sliders = Slider::all();
            $view->with(['sliders'=>$sliders]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
