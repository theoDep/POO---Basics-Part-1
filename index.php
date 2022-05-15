<?php
require_once 'Truck.php';

    $renault = new Truck('red', 4, 'electric', 100);
    var_dump($renault);
    echo $renault->load();