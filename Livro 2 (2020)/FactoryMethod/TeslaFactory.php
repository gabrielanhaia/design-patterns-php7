<?php

namespace FactoryMethod;

use FactoryMethod\Product\{
    CarroProduct, TeslaModeloS, TeslaModeloX
};

/**
 * Class TeslaFactory
 * @package FactoryMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class TeslaFactory implements CarroFactory
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
        } elseif ($modeloCarro == 'modelo_s') {
            return new TeslaModeloS();
        } else {
            throw new \Exception("Modelo de carro \"{$modeloCarro}\" não existe no sistema.");
        }
    }
}