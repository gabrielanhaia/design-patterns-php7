<?php

namespace TemplateMethod;

/**
 * Class ImpostosAlimentacao
 *
 * @package TemplateMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
class ImpostosAlimentacao extends ImpostosAbstract
{
    /**
     * @param float $precoProduto
     *
     * @return float
     */
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return $precoProduto;
    }
}