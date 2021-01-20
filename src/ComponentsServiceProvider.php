<?php


namespace Drystack;


use Drystack\Commands\PublishCommand;
use Drystack\Commands\SetupCommand;
use Drystack\Components\Layout\Column;
use Drystack\Components\Nav\Link;
use Drystack\Components\Layout\Row;
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
                __DIR__ . '/../resources/views/menu.blade.php' => resource_path('views/vendor/drystack/menu.blade.php'),
            ], 'drystack-menu');
            $this->publishes([
                __DIR__.'/../resources/views/layout.blade.php' => resource_path('views/vendor/drystack/layout.blade.php'),
                __DIR__.'/../resources/views/layout_stacked.blade.php' => resource_path('views/vendor/drystack/layout-stacked.blade.php'),
                __DIR__.'/../resources/views/components' => resource_path('views/vendor/drystack/components'),
            ], 'drystack-views');
            $this->publishes([
                __DIR__.'/../dist' => public_path('drystack'),
            ], 'drystack-compiled-assets');
            $this->publishes([
                __DIR__.'/../resources/assets' => resource_path('drystack'),
            ], 'drystack-assets');
        }

        Blade::component(Column::class, 'column', 'dry');
        Blade::component(Link::class, 'nav-link', 'dry');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');
    }
}
