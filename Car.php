<?php

class Car
{
    private int $nbWheels = 4;

    private int $currentSpeed = 0;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel = 100;

    private bool $isStarted = false;

    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;

        $this->nbSeats = $nbSeats;

        $this->energy = $energy;
    }

    public function forward(): string {
        if($this->isStarted !== false){
            $this->currentSpeed = 80;
            return 'Go !';
        } else {
            return 'Start your engine ...';
        }

    }

    public function brake(): string {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Brake !!!';
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string {
        if($this->isStarted === false) {
            $this->isStarted = true;
            return 'Your engine start !';
        } else {
            return 'Your engine is running already ...';
        }
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }
}