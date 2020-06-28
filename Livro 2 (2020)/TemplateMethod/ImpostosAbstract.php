<?php

namespace TemplateMethod;

/**
 * Implementação da classe base do "Template Method".
 *
 * Class ImpostosAbstract
 *
 * @package TemplateMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
abstract class ImpostosAbstract
{
    /**
     * Implementação do "Template Method".
     *
     * @param float $precoProduto
     *
     * @return float
     */
    public function calculaImpostosProduto(float $precoProduto): float
    {
        $precoProduto = $this->calculaPrimeiroImpostoFixo($precoProduto);

        $precoProduto = $this->calculaSegundoImpostoFixo($precoProduto);

        $precoProduto = $this->calculaImpostoAdicional($precoProduto);

        $precoProduto = $this->calculaImpostoVariavel($precoProduto);

        return $precoProduto;
    }

    /**
     * @param float $precoProduto
     *
     * @return float
     */
    abstract protected function calculaImpostoVariavel(float $precoProduto): float;

    /**
     * @param float $precoProduto
     *
     * @return float
     */
    private function calculaPrimeiroImpostoFixo(float $precoProduto): float
    {
        return ($precoProduto * 1.3);
    }

    /**
     * @param float $precoProduto
     *
     * @return float
     */
    private function calculaSegundoImpostoFixo(float $precoProduto): float
    {
        return ($precoProduto * 1.1);
    }

    /**
     * Implementação do "Hook Method"
     *
     * @param float $precoProduto
     *
     * @return float
     */
    protected function calculaImpostoAdicional(float $precoProduto): float
    {
        return $precoProduto;
    }
}