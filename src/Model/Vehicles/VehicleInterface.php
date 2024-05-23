<?php
namespace src\Model\Vehicles;

interface VehicleInterface
{
    public function calculateCost(
        int $passengers,
        float $weight,
        float $distance
    ): float;

    public function getName(): string;
}