<?php

namespace App\Providers;

use App\Gallery;
use App\LiveClass;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        if (!$this->app->runningInConsole()) {

            view()->composer('public.inc.header', function ($view) {
                $liveVideoCount = LiveClass::whereIn('type', explode(',', '1,3'))->count();
                $view->with('liveVideoCount', $liveVideoCount);
            });
            view()->composer('public.gallery', function ($view) {
                $gallery = Gallery::where([['type', '1'],['status','1']])->orderBy('id', 'DESC')->get();
                $view->with('gallery', $gallery);
            });
        


        }
    }
}
