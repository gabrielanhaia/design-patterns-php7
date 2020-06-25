<?php

namespace Decorator;

/**
 * Class Mago
 * @package Decorator
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class Mago extends Personagem
{
    /**
     * Mago constructor.
     */
    public function __construct()
    {
        $this->nome = 'Mago';
        $this->ataque = 10;
    }
}