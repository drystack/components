<?php


namespace Drystack\Components\Forms;


use Illuminate\View\Component;

class InputBase extends Component {
    public function render() {
        return view('drystack::components.form.input-base');
    }
}
