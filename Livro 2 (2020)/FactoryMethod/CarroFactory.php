<?php

namespace FactoryMethod;

use FactoryMethod\Product\CarroProduct;

/**
 * Class CarroFactory
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
interface CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct;
}