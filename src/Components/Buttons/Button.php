<?php


namespace Drystack\Components\Buttons;


use Illuminate\View\Component;

class Button extends Component {
    public function render() {
        return view('drystack::components.buttons.button');
    }
}
