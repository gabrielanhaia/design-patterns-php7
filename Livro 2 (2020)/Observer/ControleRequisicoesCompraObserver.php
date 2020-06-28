<?php

namespace Observer;

/**
 * Class ControleRequisicoesCompraObserver
 *
 * @package Observer
 */
class ControleRequisicoesCompraObserver implements Observer
{
    /**
     * @param string $codigo
     */
    public function atualizado(string $codigo): void
    {
        $this->adicionaListaRequisicaoCompra($codigo);
    }

    /**
     * Simula a adição do produto a lista de requisições de compra.
     *
     * @param string $codigoProduto
     */
    public function adicionaListaRequisicaoCompra(string $codigoProduto): void
    {
        echo 'Produto adicionado a lista de requisições de compra';
    }
}