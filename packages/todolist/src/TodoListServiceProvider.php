<?php

namespace Temur\Todolist;

use Illuminate\Support\ServiceProvider;

class TodoListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Temur\Todolist\TodoController');
        $this->loadViewsFrom(__DIR__ . '/views','todolist');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php'; 
    }
}
