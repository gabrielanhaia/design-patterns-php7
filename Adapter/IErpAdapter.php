<?php

namespace Adapter;

/**
 * Representa o "Target".
 *
 * Class IErpAdapter
 * @package Adapter
 */
interface IErpAdapter
{
    /**
     * Gera um novo Token.
     *
     * @param string $apiKey
     * @param string $usuario
     * @return string
     */
    public function gerarToken(string $apiKey, string $usuario): string;

    /**
     * Envia um pedido para o ERP.
     *
     * @param Pedido $pedido
     * @param string $token
     * @return bool
     */
    public function enviarPedido(Pedido $pedido, string $token): bool;
}