<?php
namespace src\AbstractFactory\Canceptual;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}