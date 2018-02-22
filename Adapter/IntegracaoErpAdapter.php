<?php

namespace Adapter;

/**
 * Representa o Adapter concreto.
 *
 * Class IntegracaoErpAdapter
 * @package Adapter
 */
class IntegracaoErpAdapter implements IErpAdapter
{
    /** @var IntegracaoErp $integracaoErp Objeto que representa o "Adaptee" */
    private $integracaoErp;

    /**
     * IntegracaoErpAdapter constructor.
     * @param IntegracaoErp $integracaoErp
     */
    public function __construct(IntegracaoErp $integracaoErp)
    {
        $this->integracaoErp = $integracaoErp;
    }

    /**
     * Gera um novo Token.
     *
     * @param string $apiKey
     * @param string $usuario
     * @return string
     */
    public function gerarToken(string $apiKey, string $usuario): string
    {
        return $this->integracaoErp->token($apiKey);
    }

    /**
     * Envia um pedido para o ERP.
     *
     * @param Pedido $pedido
     * @param string $token
     * @return bool
     */
    public function enviarPedido(Pedido $pedido, string $token): bool
    {
        $pedidoConvertidoArray = [
            'valor_total' => $pedido->getValorTotal(),
            'codigo' => $pedido->getNumeroPedido()
        ];

        foreach ($pedido->getProdutos() as $produto) {
            $pedidoConvertidoArray['produtos'][] = $produto;
        }

        return $this->integracaoErp->pedido($pedidoConvertidoArray, $token);
    }
}