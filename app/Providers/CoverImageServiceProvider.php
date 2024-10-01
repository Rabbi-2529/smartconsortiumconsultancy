<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CoverImage;

class CoverImageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fetch all cover images for all pages
        $coverImages = CoverImage::all()->keyBy('page_name');

        // Share the cover images data globally with all views
        view()->share('coverImages', $coverImages);
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
