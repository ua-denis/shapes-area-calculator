<?php

declare(strict_types=1);

namespace App\Domain\Contracts;

interface ShapesListInterface
{
    public function addShape(ShapeInterface $shape): ShapesListInterface;

    public function getShapes(): array;
}