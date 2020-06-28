<?php

namespace Facade;

/**
 * Class ModuloControleEstoque
 *
 * @package Facade
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ModuloControleEstoque
{
    /**
     * @param string $codigoDoLivro
     * @param int $cpfDoCliente
     *
     * @return bool
     */
    public function registraRetirada(string $codigoDoLivro, int $cpfDoCliente): bool
    {
        // Efetua o registro de retirada do livro.
        echo "Registro de retirada efetuado com sucesso.\n";

        return true;
    }

    /**
     * @param string $codigoDoLivro
     *
     * @return bool
     */
    public function validaEstoque(string $codigoDoLivro): bool
    {
        // ... Valida de possui estoque
        return true;
    }
}