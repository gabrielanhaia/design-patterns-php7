<?php

namespace Decorator;

/**
 * Class Cavaleiro
 * @package Decorator
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class Cavaleiro extends Personagem
{
    /**
     * Mago constructor.
     */
    public function __construct()
    {
        $this->nome = 'Cavaleiro';
        $this->ataque = 13;
    }
}