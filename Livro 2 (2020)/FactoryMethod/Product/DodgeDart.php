<?php

namespace FactoryMethod\Product;

/**
 * Class DodgeDart
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class DodgeDart implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Dodge Dart\n";
    }

    public function frear(): void
    {
        echo "Freando Dodge Dart\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha do Dodge Dart\n";
    }
}