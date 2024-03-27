<!-- **Task 1: Class Inheritance**-->

<!--Create classes to represent geometric shapes, including circles and rectangles.
Implement methods for area calculation. You can use the provided example code as a reference.-->

<?php

define('pi',3.14);

abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    public $radius = 7;

    public function calculateArea() {
        return pi * pow($this->radius,2);
    }
}

class Rectangle extends Shape {
    public $length = 5;
    public $width = 2;

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

class Triangle extends Shape {
    public $base = 15;
    public $height = 10;

    public function calculateArea() {
        return $this->base * $this->height / 2;
    }
}

$circle = new Circle();
echo $circle->calculateArea();

$rectangle = new Rectangle();
echo $rectangle->calculateArea();

$triangle = new Triangle();
echo $triangle->calculateArea();