<?php

namespace Builder;

/**
 * Class FabricaFoguetesDirector
 * @package Builder
 */
class FabricaFoguetesDirector
{
    /** @var FogueteBuilder $construtorDeFoguetes */
    protected FogueteBuilder $construtorDeFoguetes;

    /**
     * FabricaFoguetesDirector constructor.
     * @param FogueteBuilder $construtorDeFoguetes
     */
    public function __construct(FogueteBuilder $construtorDeFoguetes)
    {
        $this->construtorDeFoguetes = $construtorDeFoguetes;
    }

    /**
     * Método responsável por construir o foguete.
     */
    public function construirFoguete(): void
    {
        $this->construtorDeFoguetes->buildModelo();
        $this->construtorDeFoguetes->buildMotores();
        $this->construtorDeFoguetes->buildTanqueCombustivel();
        $this->construtorDeFoguetes->buildNumeroLugares();
    }

    /**
     * @return FogueteProduct
     */
    public function getFoguete(): FogueteProduct
    {
        return $this->construtorDeFoguetes->getFoguete();
    }
}