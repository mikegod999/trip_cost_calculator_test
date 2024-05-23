<?php
namespace src\Model\Fuel;

class Fuel
{
    private float $price;

    /**
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getFuelPrice(): float
    {
        return $this->price;
    }

}
