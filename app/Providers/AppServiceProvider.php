<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Post;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        try {
            //$posts = Post::all()>sortByDesc('id');            
            //$sixPosts = Post::all()->sortByDesc('id')->forPage(1,6);
            //$fourPosts = Post::all()->sortByDesc('id')->forPage(1,4);
            //View::share('posts', $posts);
            //View::share('sixPosts', $sixPosts);
            //View::share('fourPosts', $fourPosts);
            View::share('message','');

        } catch (\Illuminate\Database\QueryException $e) {
            echo("Caution: not run migrate yet".PHP_EOL);
        }

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
