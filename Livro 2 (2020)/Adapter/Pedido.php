<?php

namespace Adapter;

/**
 * Esta classe não faz parte do padrão, foi criada apenas para fins de exemplo.
 *
 * Class Pedido
 * @package Adapter
 */
class Pedido
{
    /** @var integer $numeroPedido Número identificador do pedido. */
    protected int $numeroPedido;

    /** @var float $valorTotal Valor total do pedido. */
    protected float $valorTotal;

    /** @var string[] $produtos Lista de titulos de produtos. */
    protected array $produtos;

    /**
     * @return int
     */
    public function getNumeroPedido(): int
    {
        return $this->numeroPedido;
    }

    /**
     * @param int $numeroPedido
     * @return Pedido
     */
    public function setNumeroPedido(int $numeroPedido): Pedido
    {
        $this->numeroPedido = $numeroPedido;
        return $this;
    }

    /**
     * @return float
     */
    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    /**
     * @param float $valorTotal
     * @return Pedido
     */
    public function setValorTotal(float $valorTotal): Pedido
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProdutos(): array
    {
        return $this->produtos;
    }

    /**
     * @param string[] $produtos
     * @return Pedido
     */
    public function setProdutos(array $produtos): Pedido
    {
        $this->produtos = $produtos;
        return $this;
    }

    /**
     * Adiciona um novo produto ao pedido.
     *
     * @param string $produto
     * @return Pedido
     */
    public function addProduto(string $produto)
    {
       $this->produtos[] = $produto;
       return $this;
    }
}