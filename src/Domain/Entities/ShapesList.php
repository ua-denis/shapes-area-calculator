<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\Contracts\ShapeInterface;
use App\Domain\Contracts\ShapesListInterface;
use InvalidArgumentException;

class ShapesList implements ShapesListInterface
{
    private array $shapeList;

    public function __construct(array $shapes = [])
    {
        $this->shapeList = $this->validateShapes($shapes);
    }

    private function validateShapes(array $shapes): array
    {
        foreach ($shapes as $shape) {
            if (!$shape instanceof ShapeInterface) {
                throw new InvalidArgumentException('All elements must implement ShapeInterface.');
            }
        }

        return $shapes;
    }

    public function addShape(ShapeInterface $shape): ShapesListInterface
    {
        $newShapeList = [...$this->shapeList, $shape];
        
        return new self($newShapeList);
    }

    public function getShapes(): array
    {
        return $this->shapeList;
    }
}