<?php


namespace Drystack\Components;


use Drystack\Components\Commands\PublishCommand;
use Drystack\Components\Commands\SetupCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'drystack');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');

        Blade::components([
            'drystack::components.layout.row' => 'row',
            'drystack::components.layout.column' => 'column',
            'drystack::components.layout.center' => 'center',
            'drystack::components.layout.container' => 'container',
            'drystack::components.layout.grid' => 'grid',
            'drystack::components.layout.card' => 'card',
            'drystack::components.layout.modal' => 'modal',
            'drystack::components.layout.tabs' => 'tabs',
            'drystack::components.nav.link' => 'nav-link',
            'drystack::components.nav.group' => 'nav-group',
            'drystack::components.nav.dropdown' => 'dropdown',
            'drystack::components.nav.dropdown-link' => 'dropdown-link',
            'drystack::components.notification.notification' => 'notification',
            'drystack::components.form.form' => 'form',
            'drystack::components.form.step' => 'step',
            'drystack::components.form.label' => 'label',
            'drystack::components.form.input' => 'input',
            'drystack::components.form.input-base' => 'input-base',
            'drystack::components.form.datetime' => 'datetime',
            'drystack::components.form.checkbox' => 'checkbox',
            'drystack::components.form.select' => 'select',
            'drystack::components.button.button' => 'button',
            'drystack::components.button.link' => 'button-link',
            'drystack::components.text.title' => 'title',
            'drystack::components.text.section-title' => 'section-title',
            'drystack::components.text.link' => 'link',
        ]);
    }
}
