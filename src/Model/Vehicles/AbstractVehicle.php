<?php
namespace src\Model\Vehicles;

use src\Model\Driver\Driver;
use src\Model\Fuel\Fuel;

abstract class AbstractVehicle implements VehicleInterface
{
    protected string $vehicleName;
    protected int $maxPassengers;
    protected float $maxWeight;
    protected float $fuelConsumption;
    protected float $maxDistance;
    protected float $depreciationRate;
    protected ?Driver $driver = null;
    protected ?Fuel $fuel = null;

    public function __construct(
        string $vehicleName,
        int $maxPassengers,
        float $maxWeight,
        float $fuelConsumption,
        float $maxDistance,
        float $depreciationRate
    ){
        $this->vehicleName = $vehicleName;
        $this->maxPassengers = $maxPassengers;
        $this->maxWeight = $maxWeight;
        $this->fuelConsumption = $fuelConsumption;
        $this->maxDistance = $maxDistance;
        $this->depreciationRate = $depreciationRate;
    }

    /**
     * @param Driver $driver
     * @return $this
     */
    public function setDriver(Driver $driver): self
    {
        $this->driver = $driver;
        return $this;
    }

    /**
     * @param Fuel $fuel
     * @return $this
     */
    public function setFuel(Fuel $fuel): self
    {
        $this->fuel = $fuel;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->vehicleName;
    }
}
