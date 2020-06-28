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
    public function acelerar(): void;

    public function frear(): void;

    public function trocarMarcha(): void;
}