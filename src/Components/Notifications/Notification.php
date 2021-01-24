<?php


namespace Drystack\Components\Notifications;


use Illuminate\View\Component;

class Notification extends Component {
    public function render() {
        return view('drystack::components.notifications.notification');
    }
}
