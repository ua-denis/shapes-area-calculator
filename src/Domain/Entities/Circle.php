<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\Contracts\ShapeInterface;

class Circle implements ShapeInterface
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return M_PI * $this->radius * $this->radius;
    }
}