<?php

use src\Controller\TripCostController;
use src\Model\Driver\Driver;
use src\Model\Fuel\Fuel;
use src\Model\Vehicles\Bus;

require_once __DIR__ . '/vendor/autoload.php';

// set income parameters
$passengers = 10;
$weight = 100;
$distance = 500;
$fuelPrice = 59.9;
$perKmRate = 3;
$driverCategoryCoefficient = 1.5;

$fuel = new Fuel($fuelPrice);
$driver = new Driver($perKmRate, $driverCategoryCoefficient);
$bus = new Bus(
    'Bus',
    20,
    500,
    30,
    500,
    2
);
$bus->setDriver($driver)->setFuel($fuel);

$vehicles = new TripCostController();
$vehicles->addVehicle($bus);

$results = $vehicles->calculate($passengers, $weight, $distance);

foreach ($results as $vehicle => $data) {
    echo $data['name'] . ": " . $data['cost'] . "\n";
}
