<?php
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'Speedometer.php';

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();
$bike = new Bicycle('red', 1);
$skateboard = new Skateboard('blue', 1);
$car = new Car('blue', 4, 'fuel');

echo Speedometer::convertKMtoMiles(10);