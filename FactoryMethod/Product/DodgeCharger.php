<?php

namespace FactoryMethod\Product;

/**
 * Class DodgeCharger
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class DodgeCharger implements CarroProduct
{
    public function acelerar()
    {
        echo 'Acelerando Dodge Charger';
    }

    public function frear()
    {
        echo 'Freando Dodge Charger';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Dodge Charger';
    }
}