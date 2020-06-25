<?php

namespace Builder;

/**
 * Class FogueteModeloIBuilder
 * @package Builder
 */
class FogueteModeloIBuilder extends FogueteBuilder
{
    /**
     * @return void
     */
    public function buildTanqueCombustivel()
    {
        $this->foguete->setLitrosCombustivel(1000);
    }

    /**
     * @return void
     */
    public function buildModelo()
    {
        $this->foguete->setModelo('Foguete Modelo I');
    }

    /**
     * @return void
     */
    public function buildMotores()
    {
        $this->foguete->setNumeroMotores(3);
    }

    /**
     * @return void
     */
    public function buildNumeroLugares()
    {
        $this->foguete->setNumeroLugares(8);
    }
}