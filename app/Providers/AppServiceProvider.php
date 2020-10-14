<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\About;
use App\Models\Category;
use App\Models\Client;
use App\Models\Partner;

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
        View()->share('about', About::where('status',1)->first());
        View()->share('clients', Client::orderBy('id','desc')->get());
        View()->share('partners', Partner::orderBy('id','desc')->get());
        View()->share('categories', Category::where('parent_id','0')->where('status',1)->get());
    }
}
