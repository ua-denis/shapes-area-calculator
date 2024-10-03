<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\Contracts\ShapeInterface;
use InvalidArgumentException;

class Cube implements ShapeInterface
{
    private float $sideLength;

    public function __construct(float $sideLength)
    {
        if ($sideLength <= 0) {
            throw new InvalidArgumentException('Side length must be a positive number.');
        }

        $this->sideLength = $sideLength;
    }

    public function calculateArea(): float
    {
        // Surface area of a cube: 6 * side^2
        return 6 * ($this->sideLength ** 2);
    }
}