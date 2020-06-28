<?php

namespace Memento;

/**
 * Class TextoMemento
 *
 * @package Memento
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class TextoMemento
{
    /** @var string $estadoTexto Estado do texto salvo. */
    protected string $estadoTexto;

    /**
     * TextoMemento constructor.
     *
     * @param string $estadoTexto Estado do texto a ser salvo.
     */
    public function __construct(string $estadoTexto)
    {
        $this->estadoTexto = $estadoTexto;
    }

    /**
     * Retorna o estado do texto salvo.
     *
     * @return string
     */
    public function getTexto(): string
    {
        return $this->estadoTexto;
    }
}