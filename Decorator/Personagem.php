<?php

namespace Decorator;

abstract class Personagem
{
    protected $ataque;

    protected $nome;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAtaque(): float
    {
        return $this->ataque;
    }
}