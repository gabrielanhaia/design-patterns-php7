<?php

namespace Facade;

/**
 * Class ModuloControleClientes
 * @package Facade
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ModuloControleClientes
{
    /**
     * @param string $cpfCliente
     * @return array
     */
    public function buscaCliente(string $cpfCliente): array
    {
        // Simula a busca de um cliente pelo seu CPF.
        return [
            'nome' => 'Gabriel Anhaia',
            'telefone' => '99999999999',
            'email' => 'anhaia.gabriel@gmail.com'
        ];
    }
}