<?php

namespace TemplateMethod;

/**
 * Class ImpostosEletronicos
 * @package TemplateMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class ImpostosEletronicos extends ImpostosAbstract
{
    /**
     * @param float $precoProduto
     * @return float
     */
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        $precoProduto = ($precoProduto * 1.2);

        $precoProduto = $this->calculaImpostoAdicional($precoProduto);

        return $precoProduto;
    }
}