<?php


namespace Drystack\Components\Navs;


use Illuminate\View\Component;

class NavDropdown extends Component {
    public function render() {
        return view('drystack::components.nav.dropdown');
    }
}
