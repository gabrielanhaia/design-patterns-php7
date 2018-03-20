<?php

namespace Decorator;

abstract class Personagem
{
    protected $ataque;

    protected $nome;

    abstract public function getNome(): string;

    abstract public function getAtaque(): float;
}