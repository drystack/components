<?php


namespace Drystack;


use Drystack\Commands\PublishCommand;
use Drystack\Commands\SetupCommand;
use Drystack\Components\Buttons\Button;
use Drystack\Components\Forms\Datetime;
use Drystack\Components\Forms\InputBase;
use Drystack\Components\Layouts\Card;
use Drystack\Components\Layouts\Center;
use Drystack\Components\Layouts\Column;
use Drystack\Components\Forms\Form;
use Drystack\Components\Forms\Input;
use Drystack\Components\Layouts\Modal;
use Drystack\Components\Layouts\Tabs;
use Drystack\Components\Navs\NavDropdown;
use Drystack\Components\Navs\NavDropdownLink;
use Drystack\Components\Navs\NavGroup;
use Drystack\Components\Navs\NavLink;
use Drystack\Components\Layouts\Row;
use Drystack\Components\Notifications\Notification;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentsServiceProvider extends ServiceProvider {
    public function register() {
        $this->mergeConfigFrom(__DIR__.'/../config/drystack.php', 'drystack');
    }

    public function boot() {

        if ($this->app->runningInConsole()) {
            $this->commands([
                SetupCommand::class,
                PublishCommand::class,
            ]);
            $this->publishes([
                __DIR__.'/../config/drystack.php' => config_path('drystack.php'),
            ], 'drystack-config');
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

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');

        Blade::components([
            'drystack::components.layout.row' => 'row',
            'drystack::components.layout.column' => 'column',
            'drystack::components.layout.center' => 'center',
            'drystack::components.layout.card' => 'card',
            'drystack::components.layout.modal' => 'modal',
            'drystack::components.layout.tabs' => 'tabs',
            'drystack::components.nav.link' => 'nav-link',
            'drystack::components.nav.group' => 'nav-group',
            'drystack::components.nav.dropdown' => 'dropdown',
            'drystack::components.nav.dropdown-link' => 'dropdown-link',
            'drystack::components.notification.notification' => 'notification',
            'drystack::components.form.form' => 'form',
            'drystack::components.form.input' => 'input',
            'drystack::components.form.input-base' => 'input-base',
            'drystack::components.form.datetime' => 'datetime',
            'drystack::components.button.button' => 'button',
            'drystack::components.button.link' => 'button-link',
            'drystack::components.text.title' => 'title',
            'drystack::components.text.link' => 'link',
        ]);
    }
}
