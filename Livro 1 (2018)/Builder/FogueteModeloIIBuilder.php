<?php

namespace Builder;

/**
 * Class FogueteModeloIIBuilder
 * @package Builder
 */
class FogueteModeloIIBuilder extends FogueteBuilder
{
    /**
     * @return void
     */
    public function buildTanqueCombustivel()
    {
        $this->foguete->setLitrosCombustivel(850);
    }

    /**
     * @return void
     */
    public function buildModelo()
    {
        $this->foguete->setModelo('Foguete Modelo II');
    }

    /**
     * @return void
     */
    public function buildMotores()
    {
        $this->foguete->setNumeroMotores(2);
    }

    /**
     * @return void
     */
    public function buildNumeroLugares()
    {
        $this->foguete->setNumeroLugares(6);
    }
}