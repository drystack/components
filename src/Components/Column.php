<?php


namespace Drystack\Components;


use Livewire\Component;

class Column extends Component {

    public string $css_classes = "";

    public function render() {
        return view('drystack::layout.column');
    }
}
