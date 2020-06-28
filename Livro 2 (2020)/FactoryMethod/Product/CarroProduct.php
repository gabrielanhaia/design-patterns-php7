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
    public function acelerar(): void;

    public function frear(): void;

    public function trocarMarcha(): void;
}