<?php


namespace Drystack\Components;


use Illuminate\View\Component;

class Row extends Component {
    public function render() {
        return view('drystack::layout.row');
    }
}
