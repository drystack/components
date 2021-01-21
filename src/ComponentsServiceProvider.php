<?php


namespace Drystack;


use Drystack\Commands\PublishCommand;
use Drystack\Commands\SetupCommand;
use Drystack\Components\Form\Datetime;
use Drystack\Components\Layout\Card;
use Drystack\Components\Layout\Center;
use Drystack\Components\Layout\Column;
use Drystack\Components\Form\Form;
use Drystack\Components\Form\Input;
use Drystack\Components\Nav\NavGroup;
use Drystack\Components\Nav\NavLink;
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

        Blade::component(Row::class, 'row', 'dry');
        Blade::component(Column::class, 'column', 'dry');
        Blade::component(Center::class, 'center', 'dry');
        Blade::component(Card::class, 'card', 'dry');

        Blade::component(NavLink::class, 'nav-link', 'dry');
        Blade::component(NavGroup::class, 'nav-group', 'dry');

        Blade::component(Form::class, 'form', 'dry');
        Blade::component(Input::class, 'input', 'dry');
        Blade::component(Datetime::class, 'datetime', 'dry');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');
    }
}
