<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    CarroProduct, TeslaModeloS, TeslaModeloX
};

/**
 * Class DodgeFactory
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class DodgeFactory implements CarroFactory
{
    /**
     * @param string $modeloCarro
     * @return CarroProduct
     * @throws \Exception
     */
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if ($modeloCarro == 'modelo_x') {
            return new TeslaModeloX();
        } elseif ($modeloCarro == 'modelo_y') {
            return new TeslaModeloS();
        } else {
            throw new \Exception('Modelo de carro não existe no sistema.');
        }
    }
}