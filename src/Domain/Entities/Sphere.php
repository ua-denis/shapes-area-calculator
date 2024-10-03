<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\Contracts\ShapeInterface;
use InvalidArgumentException;

class Sphere implements ShapeInterface
{
    private float $radius;

    public function __construct(float $radius)
    {
        if ($radius <= 0) {
            throw new InvalidArgumentException('Radius must be a positive number.');
        }

        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        // Surface area of a sphere: 4 * pi * r^2
        return 4 * M_PI * ($this->radius ** 2);
    }
}