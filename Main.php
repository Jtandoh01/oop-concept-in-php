<?php

require_once 'Engine.php';
require_once 'Vehicle.php';

// creating a new Vehicle instance
$vehicle = new Vehicle();

// setting the vehicle's attributes
$vehicle->setMake("Mercedes");
$vehicle->setModel("Benz E Class");
$vehicle->setYear(2019);
$vehicle->setColor("Black");

// creating a new Engine instance
$engine = new Engine();

// settting the engine's attributes
$engine->setType("V8");
$engine->setDisplacement(5000);
$engine->setHorsepower(630);

// setting the vehicle's engine attribute to the new engine instance
$vehicle->setEngine($engine);

// printing out the vehicle's attributes and engine's attributes
echo "Vehicle Info: <br>";
echo "<br>";
echo "Make: " . $vehicle->getMake() . "<br>";
echo "Model: " . $vehicle->getModel() . "<br>";
echo "Year: " . $vehicle->getYear() . "<br>";
echo "Color: " . $vehicle->getColor() . "<br>";
echo "Engine Type: " . $vehicle->getEngine()->getType() . "<br>";
echo "Engine Displacement: " . $vehicle->getEngine()->getDisplacement() . "cc<br>";
echo "Engine Horsepower: " . $vehicle->getEngine()->getHorsepower() . "hp<br>";

//var_dump($vehicle, $engine)
?>