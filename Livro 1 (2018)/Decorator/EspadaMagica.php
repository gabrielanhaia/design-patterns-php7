<?php

namespace Decorator;

/**
 * Class EspadaMagica
 * @package Decorator
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class EspadaMagica extends PersonagemDecorator
{
    /**
     * EspadaMagica constructor.
     * @param Personagem $personagem Classe base do personagem.
     */
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 5;
    }
}