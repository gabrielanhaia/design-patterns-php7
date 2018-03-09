<?php

namespace Memento;

/**
 * Class TextoCareTaker
 * @package Memento
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class TextoCareTaker
{
    /** @var TextoMemento[] $estadosTexto Estados de texto salvos. */
    protected $estadosTexto = [];

    /**
     * Adiciona um novo estado de texto (Mememento) a listagem.
     * @param TextoMemento $textoMemento
     */
    public function adicionarMemento(TextoMemento $textoMemento) {
        $this->estadosTexto[] = $textoMemento;
    }

    /**
     * Retorna o útimo estado salvo de Memento.
     * @return TextoMemento
     */
    public function retornarUltimoEstadoSalvo(): TextoMemento
    {
        if (empty($this->estadosTexto)) {
            return null;
        }

        $textoMemento = end($this->estadosTexto);
        unset($this->estadosTexto[sizeof($this->estadosTexto) - 1]);

        return $textoMemento;
    }
}