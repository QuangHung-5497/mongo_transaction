<?php

namespace Hema\MongoTransaction;

use Illuminate\Support\ServiceProvider;

class MongoTransactionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->make('Hema\MongoTransaction\Builder');
    }
}
