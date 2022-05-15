<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct($nbLane = 4, $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }


    public function addVehicle(Vehicle $vehicle): void
    {
        if (!$vehicle instanceof Bicycle && !$vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }

}