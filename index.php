<?php
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();
$bike = new Bicycle('red', 1);
$skateboard = new Skateboard('blue', 1);
$car = new Car('blue', 4, 'fuel');

var_dump($car);

try {
    $car->start();
} catch (Exception $e) {
    $car->setHasParkBrake(false);
    echo 'The park brake is off, we can start the car' . PHP_EOL;
} finally {
    echo 'Ma voiture roule comme un donut' . PHP_EOL;
}

var_dump($car);