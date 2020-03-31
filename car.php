<?php

// Car.php

class Car
{
    private $nbWheels = 4;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel = "Bas";

    public function __construct($color, $nbSeats, $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward()
    {
        $this->currentSpeed = 80;

        return "Première, deuxième, ok beau gosse je vais me cracher sale";
    }

    public function brake()
    {      
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Ralenti espèce de fou !";
        }
        $sentence .= "Ouf on l'a échappé belle !";
        return $sentence;
    }

    public function start()
    {
        return "On met le contact c'est parti les amis, VrOoooom Vroooooooooom";
    }

    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
}