<?php

namespace FactoryMethod\Product;

/**
 * Class TeslaModeloS
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class TeslaModeloS implements CarroProduct
{
    public function acelerar(): void
    {
        echo "Acelerando Tesla Modelo S\n";
    }

    public function frear(): void
    {
        echo "Freando Tesla Modelo S\n";
    }

    public function trocarMarcha(): void
    {
        echo "Trocando marcha do Tesla Modelo S\n";
    }
}