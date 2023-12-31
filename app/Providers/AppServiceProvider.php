<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
       Paginator::useBootstrap();
       \URL::forceScheme('https'); //追加
       $this->app['request']->server->set('HTTPS','on');
    }
}
