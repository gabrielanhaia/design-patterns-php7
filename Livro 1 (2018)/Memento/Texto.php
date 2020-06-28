<?php

namespace Memento;

/**
 * Class Texto
 * @package Memento
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class Texto
{
    /** @var string $texto Texto do editor. */
    protected $texto;

    /** @var TextoCareTaker $textoCareTaker Armazenador dos estados de texto. */
    protected $textoCareTaker;

    /**
     * Texto constructor.
     */
    public function __construct()
    {
        $this->textoCareTaker = new TextoCareTaker();
        $this->texto = '';
    }

    /**
     * Adiciona texto a string atual.
     * @param string $texto
     */
    public function escreverTexto(string $texto)
    {
        $this->textoCareTaker->adicionarMemento(new TextoMemento($this->texto));
        $this->texto .= $texto;
    }

    /**
     * Desfaz a ultima atualiza��o no texto.
     */
    public function desfazerEscrita()
    {
        $this->texto = $this
            ->textoCareTaker
            ->retornarUltimoEstadoSalvo()
            ->getTexto();
    }

    /**
     * Retorna o texto atual.
     * @return string
     */
    public function retornarTexto(): string
    {
       return $this->texto;
    }
}