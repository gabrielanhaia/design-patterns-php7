<?php

namespace Facade;

/**
 * Class ModuloEmail
 *
 * @package Facade
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ModuloEmail
{
    /**
     * @return bool
     */
    public function validaServidorDeEmails(): bool
    {
        // Valida se o servidor de email's está funcionando.
        return true;
    }

    /**
     * Envia uma mensagem.
     *
     * @param string $nomeRemetente
     * @param string $nomeDestinatario
     * @param string $enderecoEmailDestinatario
     * @param string $mensagem
     *
     * @return bool
     */
    public function enviaMensagem(
        string $nomeRemetente,
        string $nomeDestinatario,
        string $enderecoEmailDestinatario,
        string $mensagem
    ): bool
    {
        // Simula envio de mensagem de email.
        echo "Email enviado com sucesso.\n";

        return true;
    }
}