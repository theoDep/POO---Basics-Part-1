<?php
require_once 'Car.php';

class Truck extends Car
{
    private  int $maxCapacity = 0;
    private  int $currentCapacity = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $maxCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->maxCapacity = $maxCapacity;
    }

    public function getMaxCapacity(): int
    {
        return $this->maxCapacity;
    }

    public function setMaxCapacity(int $maxCapacity): void
    {
        $this->maxCapacity = $maxCapacity;
    }

    public function getCurrentCapacity(): int
    {
        return $this->currentCapacity;
    }

    public function setCurrentCapacity(int $currentCapacity): void
    {
        $this->currentCapacity = $currentCapacity;
    }

    public function load(): string
    {
        $sentence = "";
       while($this->currentCapacity < $this->maxCapacity){
           $this->currentCapacity++;
           $sentence .= "In filling ";
       }
        $sentence .= "Full";
        return $sentence;
    }
}