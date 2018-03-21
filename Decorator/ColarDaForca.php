<?php

namespace Decorator;

class ColarDaForca extends PersonagemDecorator
{
    public function __construct(Personagem $personagem)
    {
        parent::__construct($personagem);
        $this->ataque = 2;
    }
}