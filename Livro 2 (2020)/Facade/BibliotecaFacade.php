<?php

namespace Facade;

use Facade\{
    ModuloControleEstoque, ModuloControleClientes, ModuloEmail, ModuloApiSms
};

/**
 * Class BibliotecaFacade
 *
 * @package Facade
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class BibliotecaFacade
{
    /**
     * @param string $codigoLivro
     * @param string $cpfCliente
     *
     * @return bool
     * @throws \Exception
     */
    public function efetuaRetirada(string $codigoLivro, string $cpfCliente): bool
    {
        $moduloControleEstoque = new ModuloControleEstoque();

        if (!$moduloControleEstoque->validaEstoque($codigoLivro)) {
            throw new \Exception('Estoque indisponível');
        }

        return $moduloControleEstoque->registraRetirada($codigoLivro, $cpfCliente);
    }

    /**
     * @param string $codigoLivro
     * @param string $cpfCliente
     * @param string $apiKey
     * @param string $apiPass
     *
     * @return bool
     */
    public function disparaMensagens(
        string $codigoLivro,
        string $cpfCliente,
        string $apiKey,
        string $apiPass
    ): bool
    {
        $moduloSms = new ModuloApiSms();
        $moduloControleClientes = new ModuloControleClientes();
        $moduloEmail = new ModuloEmail();

        $cliente = $moduloControleClientes->buscaCliente($cpfCliente);

        if ($moduloEmail->validaServidorDeEmails()) {
            $moduloEmail->enviaMensagem(
                'Biblioteca de Teste',
                $cliente['nome'],
                $cliente['email'],
                "Aluguel de livro de c�digo '{$codigoLivro}' efetuado com sucesso!"
            );
        }

        $token = $moduloSms->geraTokenApi($apiKey, $apiPass);

        $moduloSms->enviaSms(
            $token,
            'Biblioteca de Teste',
            $cliente['nome'],
            $cliente['telefone'],
            "Aluguel de livro de c�digo '{$codigoLivro}' efetuado com sucesso!"
        );

        return true;
    }
}