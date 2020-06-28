<?php

namespace Decorator;

/**
 * Class Arqueiro
 * @package Decorator
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
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