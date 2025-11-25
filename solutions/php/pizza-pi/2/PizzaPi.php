<?php

class PizzaPi
{
    public function calculateDoughRequirement(int $pizzas, int $persons)
    {
        return $pizzas * (($persons * 20) + 200);
        
        // throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateSauceRequirement(int $pizzas, float $volume)
    {
        return $pizzas * 125 / $volume;
        
        // throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateCheeseCubeCoverage(float $dimension, float $thickness, float $diameter)
    {
        return floor(($dimension ** 3) / ($thickness * pi() * $diameter));
            
        // throw new \BadFunctionCallException("Implement the function");
    }

    public function calculateLeftOverSlices(int $pizzas, int $friends)
    {
        return ($pizzas * 8) % $friends;
        
        // throw new \BadFunctionCallException("Implement the function");
    }
}
