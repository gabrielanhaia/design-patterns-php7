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
        // Simula a geração de um token através da API de envio de SMS.
        return 'TOKEN_RETORNADO_API';
    }

    /**
     * @param string $nomeRemetente
     * @param string $nomeDestinatario
     * @param string $telefoneDestinatario
     * @param string $mensagem
     * @return bool
     */
    public function enviaSms(
        string $nomeRemetente,
        string $nomeDestinatario,
        string $telefoneDestinatario,
        string $mensagem
    ): bool {
        // Simula envio de mensagem SMS via API.
        return true;
    }
}