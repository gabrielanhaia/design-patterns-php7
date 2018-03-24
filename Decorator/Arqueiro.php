<?php

namespace Decorator;

/**
 * Class Arqueiro
 * @package Decorator
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class Arqueiro extends Personagem
{
    /**
     * Mago constructor.
     */
    public function __construct()
    {
        $this->nome = 'Arqueiro';
        $this->ataque = 9;
    }
}