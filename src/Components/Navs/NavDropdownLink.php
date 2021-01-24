<?php


namespace Drystack\Components\Navs;


use Illuminate\View\Component;

class NavDropdownLink extends Component {
    public function render() {
        return view('drystack::components.nav.dropdown-link');
    }
}
