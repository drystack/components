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
        Blade::component(Tabs::class, 'tabs', 'dry');
        Blade::component(Modal::class, 'modal', 'dry');

        Blade::component(NavLink::class, 'nav-link', 'dry');
        Blade::component(NavGroup::class, 'nav-group', 'dry');
        Blade::component(NavDropdown::class, 'nav-dropdown', 'dry');
        Blade::component(NavDropdownLink::class, 'nav-dropdown-link', 'dry');

        Blade::component(Notification::class, 'notification', 'dry');

        Blade::component(Form::class, 'form', 'dry');
        Blade::component(Input::class, 'input', 'dry');
        Blade::component(InputBase::class, 'input-base', 'dry');
        Blade::component(Datetime::class, 'datetime', 'dry');

        Blade::component(Button::class, 'button', 'dry');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'drystack');
    }
}
