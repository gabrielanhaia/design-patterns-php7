<?php

namespace Decorator;

/**
 * Class ColarDaForca
 * @package Decorator
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ColarDaForca extends PersonagemDecorator
{
    /**
     * ColarDaForca constructor.
     * @param Personagem $personagem Classe base do personagem
     */
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 2;
    }
}