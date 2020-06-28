<?php

namespace Decorator;

/**
 * Class AnelDeFogo
 * @package Decorator
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class AnelDeFogo extends PersonagemDecorator
{
    /**
     * AnelDeFogo constructor.
     * @param Personagem $personagem Classe base do personagem.
     */
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 3;
    }
}