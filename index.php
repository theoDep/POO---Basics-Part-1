<?php
    include_once 'Car.php';
    include_once 'Bicycle.php';

    $honda = new Car('blue', 4, 'gasoil');
    $decathlon = new Bicycle('red');

    var_dump($honda);
    var_dump($decathlon);

    echo $honda->forward();
    echo $honda->start();
    echo $honda->forward();
    echo $honda->getCurrentSpeed();
    echo $honda->brake();
    echo $honda->brake();

    echo $decathlon->forward();
    echo $decathlon->forward();
    echo $decathlon->getCurrentSpeed();
    echo $decathlon->brake();
    echo $decathlon->brake();
