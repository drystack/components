<?php


namespace Drystack\Components\Layouts;


use Illuminate\View\Component;

class Tabs extends Component {
    public array $tabs = [];

    public function render() {
        return view('drystack::components.layout.tabs');
    }
}
