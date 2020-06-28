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
    public function buildTanqueCombustivel(): void
    {
        $this->foguete->setLitrosCombustivel(850);
    }

    /**
     * @return void
     */
    public function buildModelo(): void
    {
        $this->foguete->setModelo('Foguete Modelo II');
    }

    /**
     * @return void
     */
    public function buildMotores(): void
    {
        $this->foguete->setNumeroMotores(2);
    }

    /**
     * @return void
     */
    public function buildNumeroLugares(): void
    {
        $this->foguete->setNumeroLugares(6);
    }
}