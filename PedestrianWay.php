<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct($nbLane = 1, $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            $this->currentVehicles[] = $vehicle;
        }
    }
}