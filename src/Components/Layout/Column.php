<?php


namespace Drystack\Components\Layout;


use Illuminate\View\Component;

class Column extends Component {
    public function render() {
        return view('drystack::layout.column');
    }
}
