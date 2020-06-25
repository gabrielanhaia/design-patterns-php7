<?php

namespace Decorator;

/**
 * Classe base de nosso decorator.
 *
 * Class Personagem
 * @package Decorator
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
abstract class Personagem
{
    /** @var float $ataque Força de ataque. */
    protected $ataque;

    /** @var string $nome Nome da classe do personagem. */
    protected $nome;

    /**
     * Retorna o nome da classe do personagem.
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Retorna a força de ataque do personagem.
     *
     * @return float
     */
    public function getAtaque(): float
    {
        return $this->ataque;
    }
}