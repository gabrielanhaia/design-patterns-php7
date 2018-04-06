<?php

namespace Prototype;

/**
 * Class LivroPhpPrototype
 * @package Prototype
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class LivroPhpPrototype extends LivroPrototype
{
    /**
     * LivroPhpPrototype constructor.
     */
    public function __construct()
    {
        $this->setAssunto('PHP');
    }

    public function __clone()
    {
    }
}