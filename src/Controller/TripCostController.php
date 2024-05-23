<?php
namespace src\Controller;

use src\Model\Vehicles\VehicleInterface;

class TripCostController
{
    private array $vehicles = [];

    /**
     * @param VehicleInterface $vehicle
     * @return $this
     */
    public function addVehicle(VehicleInterface $vehicle): self
    {
        $this->vehicles[] = $vehicle;
        return $this;
    }

    /**
     * @param int $passengers
     * @param float $weight
     * @param float $distance
     * @return array
     */
    public function calculate(
        int $passengers,
        float $weight,
        float $distance
    ): array
    {
        $list = [];

        foreach ($this->vehicles as $vehicle) {
            $cost = $vehicle->calculateCost($passengers, $weight, $distance);
            if ($cost) {
                $list[] = [
                    'name' => $vehicle->getName(),
                    'cost' => $cost,
                ];
            }
        }

        return $list;
    }
}