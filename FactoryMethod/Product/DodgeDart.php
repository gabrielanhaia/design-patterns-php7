<?php

namespace FactoryMethod\Product;

/**
 * Class DodgeDart
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class DodgeDart implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodge Dart\n";
    }

    public function frear()
    {
        echo "Freando Dodge Dart\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha do Dodge Dart\n";
    }
}