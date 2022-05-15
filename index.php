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

var_dump($motorWay);
$motorWay->addVehicle($car);
$motorWay->addVehicle($bike);
$motorWay->addVehicle($skateboard);
var_dump($motorWay);

var_dump($pedestrianWay);
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($skateboard);
var_dump($pedestrianWay);

var_dump($residentialWay);
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($skateboard);
var_dump($residentialWay);
