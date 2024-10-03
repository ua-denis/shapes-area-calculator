<?php

declare(strict_types=1);

namespace App\Infrastructure\CLI;

use App\Application\Services\AreaCalculator;
use App\Domain\Entities\Circle;
use App\Domain\Entities\Cube;
use App\Domain\Entities\Pyramid;
use App\Domain\Entities\ShapesList;
use App\Domain\Entities\Sphere;
use App\Domain\Entities\Square;
use App\Domain\Entities\Triangle;
use Exception;

class ConsoleApplication
{
    public function run(): void
    {
        try {
            $shapes2DList = new ShapesList([
                new Circle(5),
                new Square(4, 6),
                new Triangle(3, 9)
            ]);

            $shapes3DList = (new ShapesList())
                ->addShape(new Cube(2))
                ->addShape(new Pyramid(3, 4))
                ->addShape(new Sphere(3));

            $calculator = new AreaCalculator();

            $total2DArea = $calculator->calculate($shapes2DList);
            $total3DArea = $calculator->calculate($shapes3DList);

            echo 'Total area of 2D shapes: '.$total2DArea.PHP_EOL;
            echo 'Total area of 3D shapes: '.$total3DArea.PHP_EOL;
        } catch (Exception $e) {
            echo 'Error: '.$e->getMessage().PHP_EOL;
        }
    }
}