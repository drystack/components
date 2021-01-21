<?php


namespace Drystack\Components\Layouts;


use Illuminate\View\Component;

class Modal extends Component {
    public string $title = '';
    public function render() {
        return view('drystack::components.layout.modal');
    }
}
