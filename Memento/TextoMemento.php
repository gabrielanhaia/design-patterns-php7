<?php

namespace Memento;

/**
 * Class TextoMemento
 * @package Memento
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class TextoMemento
{
    /** @var string $texto Estodo do texto salvo. */
    protected $texto;

    /**
     * TextoMemento constructor.
     * @param string $estadoTexto Estado do texto a ser salvo.
     */
    public function __construct(string $estadoTexto)
    {
        $this->estadoTexto;
    }

    /**
     * Retorna o estado do texto salvo.
     * @return string
     */
    public function getTexto(): string
    {
        return $this->texto;
    }
}