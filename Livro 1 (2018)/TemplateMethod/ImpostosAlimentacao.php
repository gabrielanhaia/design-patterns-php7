<?php

namespace TemplateMethod;

/**
 * Class ImpostosAlimentacao
 * @package TemplateMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ImpostosAlimentacao extends ImpostosAbstract
{
    /**
     * @param float $precoProduto
     * @return float
     */
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return $precoProduto;
    }
}