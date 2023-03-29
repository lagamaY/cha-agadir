<?php

namespace App\Providers;

use App\Models\Logo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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
        

        $latest_blog=DB::table('blogs')->orderBy('created_at','Desc')->limit(3)->get();
        View::share('latest_blog', $latest_blog);
        $logo_url=Logo::latest('id')->limit(1)->get();
        View::share('logo_url',  $logo_url);

        
    }
}