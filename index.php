<?php

require_once 'bicycle.php';
$bike = new Bicycle("red");
var_dump($bike);
$bike->setCurrentSpeed(0);
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

require_once 'car.php';
$car = new Car("vert", 4, "Diesel");
var_dump($car);
echo $car->start();
echo '<br> Je suis actuellement dans un véhicule ' . $car->getColor() .' de type voiture avec ' . $car->getNbWheels() . " roues" . '<br>';
echo $car->forward();
echo '<br> Je sens que les ' . $car->getNbSeats() . " sièges vont s'envoler, le moteur " . $car->getEnergy() . " va exploser !" . '<br>';
echo 'Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo "<br> Mon réservoir à énergie est presque vide, la jauge m'indique : " . $car->getEnergyLevel() . ", c'est parti on va trouver une station essence !";
