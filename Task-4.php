<!--**Task 4: Polymorphism**-->

<!--Build a set of animal classes that demonstrate polymorphism by overriding a method for making sounds.-->

<?php

class Animal {
    public function makeSound() {
        echo "The animal makes a sound.";
    }
}

class Bird extends Animal {
    public function makeSound() {
        echo "The bird chirps.";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "The cat meows.";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "The dog barks.";
    }
}

$animal = new Animal();
$animal->makeSound();  // Output: The animal makes a sound.

$bird = new Bird();
$bird->makeSound();  // Output: The bird chirps.    //Class Animal overridden by Class Bird

$cat = new Cat();
$cat->makeSound();  // Output: The cat meows.       //Class Animal overridden by Class Cat

$dog = new Dog();
$dog->makeSound();  // Output: The dog barks.       //Class Animal overridden by Class Dog
