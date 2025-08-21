<?php

class PizzaPi
{
    // 1. Dough requirement in grams
    public function calculateDoughRequirement(int $numberOfPizzas, int $diameter): int
    {
        return ($numberOfPizzas * $diameter * 50) - 50;
    }

    // 2. Sauce requirement in ml (assuming 1 unit per 500 ml)
    public function calculateSauceRequirement(int $numberOfPizzas, int $diameter): int
    {
        return (int) ceil(($numberOfPizzas * $diameter) / 500);
    }

    // 3. Cheese cube coverage (Lilly's formula)
    public function calculateCheeseCubeCoverage(float $cheese_dimension, float $thickness, float $diameter): int
    {
        $pizzas = ($cheese_dimension ** 3) / ($thickness * pi() * $diameter);
        return (int) floor($pizzas);
    }

    // 4. Leftover slices after distributing among friends
    public function calculateLeftOverSlices(int $numberOfPizzas, int $numberOfFriends): int
    {
        $totalSlices = $numberOfPizzas * 8;
        return $totalSlices % $numberOfFriends;
    }
}
