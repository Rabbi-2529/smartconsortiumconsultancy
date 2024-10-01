<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SocialLink;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*', function ($view) {
            $socialLinks = SocialLink::all();
            $view->with('socialLinks', $socialLinks);
        });
    }

    public function register()
    {
        //
    }
}
