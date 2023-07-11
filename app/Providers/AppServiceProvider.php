<?php

namespace App\Providers;

use App\Repositories\Repositories;
use App\Repositories\Imp\AdminDao;
use App\Repositories\Imp\ImpRepositories;
use App\Http\Controllers\UsersController;
use App\Models\Admin;
use App\Models\User;
use App\Services\AdminService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        if (env('REDIRECT_HTTPS'))
        {
            $url->forceScheme('https');
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(env('REDIS_HTTPS')){
            $this->app['request']->server->set('HTTPS', true);
        }


    }


}
