<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\Contracts\ShapeInterface;
use InvalidArgumentException;

class Pyramid implements ShapeInterface
{
    private float $baseLength;
    private float $slantHeight;

    public function __construct(float $baseLength, float $slantHeight)
    {
        if ($baseLength <= 0 || $slantHeight <= 0) {
            throw new InvalidArgumentException('Base length and slant height must be positive numbers.');
        }

        $this->baseLength = $baseLength;
        $this->slantHeight = $slantHeight;
    }

    public function calculateArea(): float
    {
        // Surface area of a square-based pyramid: b^2 + 2 * b * l
        return ($this->baseLength ** 2) + 2 * $this->baseLength * $this->slantHeight;
    }
}