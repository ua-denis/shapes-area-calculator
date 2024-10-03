<?php

declare(strict_types=1);

namespace App\Domain\Contracts;

interface ShapeInterface
{
    public function calculateArea(): float;
}