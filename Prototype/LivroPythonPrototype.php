<?php

namespace Prototype;

/**
 * Class LivroPythonPrototype
 * @package Prototype
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class LivroPythonPrototype extends LivroPrototype
{
    /**
     * LivroPythonPrototype constructor.
     */
    public function __construct()
    {
        $this->setAssunto('Python');
    }

    public function __clone()
    {
        echo "Livro Python Clonado\n";
    }
}