<?php

namespace Decorator;

/**
 * Class Cavaleiro
 * @package Decorator
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class Cavaleiro
{
    /**
     * Mago constructor.
     */
    public function __construct()
    {
        $this->nome = 'Cavaleiro';
        $this->ataque = '13';
    }
}