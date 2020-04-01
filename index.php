<?php

// BICYCLE -----------------------------------------------------------------------------------------------------------

require_once 'bicycle.php';
$bike = new Bicycle("Rouge", 1);
$bike->setCurrentSpeed(20);
$bike->setNbWheels(2);
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// CAR ------------------------------------------------------------------------------------------------------------------

require_once 'car.php';
$car = new Car("Vert", 4, "Electrique");
$car->setNbWheels(4);
$car->setCurrentSpeed(30);
$car->setEnergyLevel("Bas");
var_dump($car);

// Moving Car
echo $car->start();
echo '<br> Je suis actuellement dans un véhicule ' . $car->getColor() .' de type voiture avec ' . $car->getNbWheels() . " roues" . '<br>';
echo $car->forward();
echo '<br> Je sens que les ' . $car->getNbSeats() . " sièges vont s'envoler, le moteur " . $car->getEnergy() . " va exploser !" . '<br>';
echo 'Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo "<br> Mon réservoir à énergie est presque vide, la jauge m'indique : " . $car->getEnergyLevel() . ", c'est parti on va trouver une station essence !";

// TRUCK ----------------------------------------------------------------------------------------------------------------------------------

require_once 'truck.php';
$truck = new Truck(60, "Violet", 2, "Diesel");
$truck->setEnergyLevel("Haut");
$truck->setNbWheels(8);
$truck->setCurrentSpeed(50);
$truck->setCurrentStorage(0);
var_dump($truck);

// Moving Truck
echo $truck->start();
echo "<br> Mon réservoir à énergie est plein, la jauge m'indique : " . $truck->getEnergyLevel();
echo '<br> Je suis actuellement dans un camion ' . $truck->getColor() .' avec ' . $truck->getNbWheels() . " roues" . '<br>';
echo $truck->forward();
echo '<br> Je sens que les ' . $truck->getNbSeats() . " sièges vont s'envoler, le moteur " . $truck->getEnergy() . " va exploser !" . '<br>';
echo 'Vitesse du véhicule : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du véhicule : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
// Filling truck
echo '<br> Chargement du véhicule : ' . $truck->getCurrentStorage() . ' tonne' . '<br>';
echo $truck->fill();
echo '<br> Chargement du véhicule : ' . $truck->getCurrentStorage() . ' tonnes' . '<br>';
echo $truck->fill();