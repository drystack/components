<?php


namespace Drystack;


use Drystack\Commands\SetupCommand;
use Drystack\Components\Column;
use Drystack\Components\Row;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ComponentsServiceProvider extends ServiceProvider {
    public function register() {
        //$this->mergeConfigFrom(__DIR__ . '/../config/drystack.php', 'drystack');
    }

    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SetupCommand::class,
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
//            $this->publishes([
//                __DIR__.'/../config/drystack.php' => config_path('drystack.php'),
//            ], 'drystack-config');
        }

        Livewire::component('column', Column::class);
        Livewire::component('row', Row::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');
    }
}
