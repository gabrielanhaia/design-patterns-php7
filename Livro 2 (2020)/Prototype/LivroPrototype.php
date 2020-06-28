<?php

namespace Prototype;

/**
 * Class LivroPrototype
 *
 * @package Prototype
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
abstract class LivroPrototype
{
    /** @var string $titulo Titulo do livro. */
    protected string $titulo;

    /** @var string $assunto Assunto do livro. */
    protected string $assunto;

    /** @var string $nomeTitular Nome do titular do livro. */
    protected string $nomeTitular;

    /**
     * @return self
     */
    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     *
     * @return LivroPrototype
     */
    public function setTitulo(string $titulo): LivroPrototype
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssunto(): string
    {
        return $this->assunto;
    }

    /**
     * @param string $assunto
     *
     * @return LivroPrototype
     */
    public function setAssunto(string $assunto): LivroPrototype
    {
        $this->assunto = $assunto;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    /**
     * @param string $nomeTitular
     *
     * @return LivroPrototype
     */
    public function setNomeTitular(string $nomeTitular): LivroPrototype
    {
        $this->nomeTitular = $nomeTitular;
        return $this;
    }
}