<?php

namespace TemplateMethod;

/**
 * Class ImpostosVestuario
 *
 * @package TemplateMethod
 *
 * @author Gabriel Anhaia <anhaia.gabriel@gmail.com>
 */
class ImpostosVestuario extends ImpostosAbstract
{
    /**
     * @param float $precoProduto
     *
     * @return float
     */
    protected function calculaImpostoVariavel(float $precoProduto): float
    {
        return ($precoProduto * 1.15);
    }
}