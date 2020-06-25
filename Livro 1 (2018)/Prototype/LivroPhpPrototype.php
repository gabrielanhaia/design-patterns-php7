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

    /**
     * @return self
     */
    public function __clone()
    {
        echo "Livro PHP Clonado\n";
    }
}