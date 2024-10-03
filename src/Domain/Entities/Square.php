<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\Contracts\ShapeInterface;

class Square implements ShapeInterface
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}