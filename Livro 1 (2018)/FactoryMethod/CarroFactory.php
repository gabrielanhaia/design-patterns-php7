<?php

namespace FactoryMethod;

use FactoryMethod\Product\CarroProduct;

/**
 * Class CarroFactory
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
interface CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct;
}