<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use src\Controller\TripCostController;
use src\Vehicles\Bus;

class VehiclesControllerTest extends TestCase {
    public function testCalculate() {
        $vehicles = new TripCostController();
        $bus = new Bus(
            'Bus',
            20,
            500,
            30,
            500,
            2
        );

        $vehicles->addVehicle($bus);
        $results = $vehicles->calculate(3, 100, 50);
        $this->assertEquals(137.8, $results[0]['cost']);
    }
}
