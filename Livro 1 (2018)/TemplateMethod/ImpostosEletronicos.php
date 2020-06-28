<?php

namespace TemplateMethod;

/**
 * Class ImpostosEletronicos
 * @package TemplateMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
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

        return $precoProduto;
    }

    /**
     * @param float $precoProduto
     * @return float
     */
    protected function calculaImpostoAdicional(float $precoProduto): float
    {
        return $precoProduto - ($precoProduto * 0.1);
    }
}