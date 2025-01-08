<?php
namespace App\Providers;

use App\Models\posts1;
use App\Policies\PostPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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
        // Usar Bootstrap para la paginación
        Paginator::useBootstrap();

        View::share('site_name', 'MY SITE');

        // Gate::define('create_post',function(){
        //     return Auth::user()->is_admin;
        // });

        // Gate::define('edit_post',function(){
        //     return Auth::user()->is_admin;
        // });
        Gate::define('delete_post',function($user){
            // return Auth::user()->is_admin;
            return $user->role_id ==1 || $user->role_id==2;
        });
    Gate::policy(posts1::class,PostPolicy::class);
    }
}
