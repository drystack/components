<?php


namespace Drystack\Components\Layouts;


use Illuminate\View\Component;

class Card extends Component {
    public function render() {
        return view('drystack::components.layout.card');
    }
}
