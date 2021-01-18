<?php


namespace Drystack;


use Illuminate\Support\ServiceProvider;

class ComponentsServiceProvider extends ServiceProvider {
    public function register() {}

    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/drystack'),
            ], 'drystack-views');
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');
    }
}
