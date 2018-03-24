<?php

namespace Decorator;

/**
 * Class PersonagemDecorator
 * @package Decorator
 */
abstract class PersonagemDecorator extends Personagem
{
    /** @var Personagem $personagem */
    protected $personagem;

    /**
     * PersonagemDecorator constructor.
     * @param Personagem $personagem
     */
    public function __construct(Personagem $personagem)
    {
        $this->personagem = $personagem;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->personagem->getNome();
    }

    /**
     * @return float
     */
    public function getAtaque(): float
    {
        return $this->personagem->getAtaque() + $this->ataque;
    }
}