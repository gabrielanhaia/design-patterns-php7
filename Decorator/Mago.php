<?php

namespace Decorator;


class Mago extends Personagem
{
    public function __construct()
    {
        $this->nome = 'Mago';
        $this->ataque = '10';
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAtaque(): float
    {
        return $this->nome;
    }
}