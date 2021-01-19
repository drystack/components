<?php


namespace Drystack;


use Drystack\Commands\PublishCommand;
use Drystack\Commands\SetupCommand;
use Drystack\Components\Column;
use Drystack\Components\Row;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ComponentsServiceProvider extends ServiceProvider {
    public function register() {}

    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SetupCommand::class,
                PublishCommand::class,
            ]);
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/drystack'),
            ], 'drystack-views');
            $this->publishes([
                __DIR__.'/../dist' => public_path('drystack'),
            ], 'drystack-compiled-assets');
            $this->publishes([
                __DIR__.'/../resources/assets' => resource_path('drystack'),
            ], 'drystack-assets');
        }

        Blade::componentNamespace('Drystack\\Components\\', 'drystack');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');
    }
}
