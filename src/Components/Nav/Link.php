<?php


namespace Drystack\Components\Nav;


use Illuminate\View\Component;

class Link extends Component {
    public function render() {
        return view('drystack::components.nav.link');
    }
}
