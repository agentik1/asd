<?php
require_once 'flybehaviour.php';
class FlyNoWay implements FlyBehavior {
    public function fly() {
        echo 'Утка не умеет летать<br>';
    }
}
?>