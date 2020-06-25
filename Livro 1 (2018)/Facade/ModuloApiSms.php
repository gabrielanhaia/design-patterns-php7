<?php

namespace Facade;

/**
 * Class ModuloApiSms
 * @package Facade
 * 
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class ModuloApiSms
{
    /**
     * @param string $apiKey
     * @param string $apiPass
     * @return string
     */
    public function geraTokenApi(string $apiKey, string $apiPass): string
    {
        // Simula a gera��o de um token atrav�s da API de envio de SMS.
        return 'TOKEN_RETORNADO_API';
    }

    /**
     * @param string $tokenApi
     * @param string $nomeRemetente
     * @param string $nomeDestinatario
     * @param string $telefoneDestinatario
     * @param string $mensagem
     * @return bool
     */
    public function enviaSms(
        string $tokenApi,
        string $nomeRemetente,
        string $nomeDestinatario,
        string $telefoneDestinatario,
        string $mensagem
    ): bool {
        // Simula envio de mensagem SMS via API.
        echo "SMS enviado com sucesso.\n";

        return true;
    }
}