<?php


namespace Drystack\Components\Commands;


use Illuminate\Console\Command;

class SetupCommand extends Command {
    protected $signature = 'drystack:setup';

    protected $description = 'Setup Drystack components, resources and configurations';

    public function handle() {
        $this->callSilent('vendor:publish', ['--tag' => 'drystack-compiled-assets', '--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'drystack-menu', '--force' => true]);
    }
}
