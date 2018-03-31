<?php

namespace FactoryMethod\Product;

/**
 * Interface CarroProduct
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
interface CarroProduct
{
    public function acelerar();

    public function frear();

    public function trocarMarcha();
}