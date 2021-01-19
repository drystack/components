<?php


namespace Drystack\Commands;


use Illuminate\Console\Command;

class PublishCommand extends Command {
    protected $signature = 'drystack:publish';

    protected $description = 'Setup Drystack components, resources and configurations';

    public function handle() {
        $this->callSilent('vendor:publish', ['--tag' => 'drystack-assets', '--force' => true]);
        $this->callSilent('vendor:publish', ['--tag' => 'drystack-views', '--force' => true]);

        copy(__DIR__ . '/../../postcss.config.js', base_path());
        copy(__DIR__ . '/../../tailwind.config.js', base_path());

        $this->addNpmDependencies([
            "alpinejs" => "^2.8.0",
            "autoprefixer" => "^10.2.1",
            "postcss" => "^8.2.4",
            "tailwindcss" => "^2.0.2"
        ]);

        $this->addMixConfiguration();
    }

    /**
     * @param string[] $dependencies
     */
    private function addNpmDependencies($dependencies_to_add) {
        $json = json_decode(file_get_contents(base_path('package.json')), true);

        $dev_dependencies = $json['devDependencies'] ?? [];

        foreach ($dependencies_to_add as $dependency_to_add => $version) {
            $dev_dependencies[$dependency_to_add] = $version;
        }

        ksort($dev_dependencies);

        $json['devDependencies'] = $dev_dependencies;

        file_put_contents(
            base_path('package.json'),
            json_encode($json, JSON_PRETTY_PRINT)
        );
    }

    private function addMixConfiguration() {
        $mix = file_get_contents(base_path('webpack.mix.js'));

        $mix .= "\n";
        $mix .= "mix.js('resources/drystack/js/components.js', 'public/drystack/js').version(); \n";
        $mix .= "mix.postCss('resources/drystack/css/components.css', 'public/drystack/css', require('tailwindcss')).version();";

        file_put_contents(base_path('webpack.mix.js'), $mix);
    }
}
