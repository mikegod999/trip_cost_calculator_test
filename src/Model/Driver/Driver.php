<?php
namespace src\Model\Driver;

class Driver
{
    private float $rate;
    private float $categoryCoefficient;

    public function __construct(
        float $rate,
        float $categoryCoefficient
    ){
        $this->rate = $rate;
        $this->categoryCoefficient = $categoryCoefficient;
    }

    /**
     * @return float
     */
    public function calculateSalary(): float
    {
        return 3 * $this->rate * $this->categoryCoefficient;
    }
}
