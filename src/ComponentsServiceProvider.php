<?php


namespace Drystack;


use Drystack\Components\Column;
use Drystack\Components\Row;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ComponentsServiceProvider extends ServiceProvider {
    public function register() {}

    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/drystack'),
            ], 'drystack-views');
        }

        Livewire::component('column', Column::class);
        Livewire::component('row', Row::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');
    }
}
