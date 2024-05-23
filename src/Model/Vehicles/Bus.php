<?php
namespace src\Model\Vehicles;

class Bus extends AbstractVehicle
{
    /**
     * @param int $passengers
     * @param float $weight
     * @param float $distance
     * @return float
     */
    public function calculateCost(
        int $passengers,
        float $weight,
        float $distance
    ): float
    {
        if (
            $passengers > $this->maxPassengers ||
            $weight > $this->maxWeight ||
            $distance > $this->maxDistance
        ) {
            return 0; //
        }

        $driverSalary = $this->driver ? $this->driver->calculateSalary() : 0;
        $fuelPrice = $this->fuel ? $this->fuel->getFuelPrice() : 0;

        return $driverSalary + ($fuelPrice * $this->depreciationRate);
    }
}