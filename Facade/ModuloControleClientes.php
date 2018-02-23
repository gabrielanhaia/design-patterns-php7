<?php

namespace Facade;

/**
 * Class ModuloControleClientes
 * @package Facade
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
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
            'nome' => 'Cliente de Teste',
            'telefone' => '99999999999',
            'email' => 'cliente@teste_facade.com'
        ];
    }
}