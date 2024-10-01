<?php

namespace App\Providers;

use App\Models\SocialLink;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\EmployersCorner;

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
                View::composer(['frontend.master'],function($view){
            $view->with('socialLinks',SocialLink::all());
            $view->with('employCorners',EmployersCorner::all());

        });
    }
}
