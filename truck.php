<?php

// Truck.php

require_once 'vehicule.php';

class Truck extends Vehicule{
    private $energy;
    private $energyLevel;
    private $storageCapacity;
    private $currentStorage;

    const ALLOWED_ENERGIES = [
        'Diesel',
        'Electrique', ];

    public function __construct($storageCapacity, $color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
            $this->storageCapacity;
        }
        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStorageCapacity(): string
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(string $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCurrentStorage(): string
    {
        return $this->currentStorage;
    }

    public function setCurrentStorage(string $currentStorage): void
    {
        $this->currentStorage = $currentStorage;
    }

    public function fill()
    {      
        $sentence = "";
        while ($this->currentStorage < $this->storageCapacity) {
            $this->currentStorage++;
            $sentence .= " Entrain de remplir ";
        }
        $sentence .= " Rempli !!! ";
        return $sentence;
    }

}