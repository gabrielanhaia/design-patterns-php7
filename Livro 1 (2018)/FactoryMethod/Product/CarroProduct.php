<?php

namespace FactoryMethod\Product;

/**
 * Interface CarroProduct
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
interface CarroProduct
{
    public function acelerar();

    public function frear();

    public function trocarMarcha();
}