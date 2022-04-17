<?php
require_once 'flybehaviour.php';
class FlyWithWings implements FlyBehavior {
    public function fly() {
        echo 'Утка умеет летать<br>';
    }
}
?>