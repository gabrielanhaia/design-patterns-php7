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
        echo 'Acelerando Tesla Modelo X';
    }

    public function frear()
    {
        echo 'Freando Tesla Modelo X';
    }

    public function trocarMarcha()
    {
        echo 'Trocando marcha do Tesla Modelo X';
    }
}