<?php

namespace Observer;

/**
 * Class ControleRequisicoesCompraObserver
 * @package Observer
 */
class ControleRequisicoesCompraObserver implements Observer
{
    /**
     * @param string $codigo
     */
    public function atualizado(string $codigo)
    {
        $this->adicionaListaRequisicaoCompra($codigo);
    }

    public function adicionaListaRequisicaoCompra(string $codigoProduto)
    {
        // Simula a adição do produto a lista de requisições de compra.
    }
}