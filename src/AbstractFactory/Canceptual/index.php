<?php
require_once "./vendor/autoload.php";
use src\AbstractFactory\Canceptual\AbstractFactory;
use src\AbstractFactory\Canceptual\ConcreteFactory1;
use src\AbstractFactory\Canceptual\ConcreteFactory2;

function clientCode(AbstractFactory $factory): void
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "\n";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}

/**
 * The client code can work with any concrete factory class.
 */
echo "Client: Testing client code with the first factory type:\n";
clientCode(new ConcreteFactory1());

echo "\n";

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new ConcreteFactory2());
