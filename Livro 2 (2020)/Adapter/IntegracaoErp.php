<?php

namespace Adapter;

/**
 * Representa o "Adaptee".
 *
 * Class IntegracaoErp
 */
class IntegracaoErp
{
    /**
     * Método que representa a geração de um token para API.
     * @param string $apiKey
     * @return string
     */
    public function token($apiKey): string
    {
        return 'TOKEN_GERADO_VIA_API';
    }

    /**
     * Método que representa o envio de um pedido para o ERP.
     * @param array $pedido
     * @return bool
     */
    public function pedido($pedido, $apiKey): bool
    {
        return true;
    }
}