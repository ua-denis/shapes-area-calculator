<?php

declare(strict_types=1);

namespace App\Application\Services;

use App\Domain\Contracts\ShapesListInterface;

class AreaCalculator
{
    public function calculate(ShapesListInterface $shapesList): float
    {
        $totalArea = 0;

        foreach ($shapesList->getShapes() as $shape) {
            $totalArea += $shape->calculateArea();
        }
        
        return $totalArea;
    }
}