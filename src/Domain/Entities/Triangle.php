<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\Contracts\ShapeInterface;
use InvalidArgumentException;

class Triangle implements ShapeInterface
{
    private float $base;
    private float $height;

    public function __construct(float $base, float $height)
    {
        if ($base <= 0 || $height <= 0) {
            throw new InvalidArgumentException('Base and height must be positive numbers.');
        }

        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return 0.5 * $this->base * $this->height;
    }
}