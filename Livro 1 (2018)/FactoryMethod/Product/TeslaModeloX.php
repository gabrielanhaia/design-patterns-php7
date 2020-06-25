<?php

namespace FactoryMethod\Product;

/**
 * Class TeslaModeloX
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class TeslaModeloX implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Tesla Modelo X\n";
    }

    public function frear()
    {
        echo "Freando Tesla Modelo X\n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha do Tesla Modelo X\n";
    }
}