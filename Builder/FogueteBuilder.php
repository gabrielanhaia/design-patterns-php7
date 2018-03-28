<?php

namespace Builder;

abstract class FogueteBuilder
{
    /** @var FogueteBuilder $foguete */
    protected $foguete;

    /**
     * FogueteBuilder constructor.
     */
    public function __construct()
    {
        $this->foguete = new FogueteProduct();
    }

    /**
     * @return FogueteProduct
     */
    public function getFoguete(): FogueteProduct
    {
        return $this->foguete;
    }

    /**
     * @return void
     */
    abstract public function buildTanqueCombustivel();

    /**
     * @return void
     */
    abstract public function buildModelo();

    /**
     * @return void
     */
    abstract public function buildMotores();

    /**
     * @return void
     */
    abstract public function buildNumeroLugares();
}