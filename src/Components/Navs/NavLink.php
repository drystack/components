<?php


namespace Drystack\Components\Navs;


use Illuminate\View\Component;

class NavLink extends Component {
    public function render() {
        return view('drystack::components.nav.link');
    }
}