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
    public function buildTanqueCombustivel(): void
    {
        $this->foguete->setLitrosCombustivel(1000);
    }

    /**
     * @return void
     */
    public function buildModelo(): void
    {
        $this->foguete->setModelo('Foguete Modelo I');
    }

    /**
     * @return void
     */
    public function buildMotores(): void
    {
        $this->foguete->setNumeroMotores(3);
    }

    /**
     * @return void
     */
    public function buildNumeroLugares(): void
    {
        $this->foguete->setNumeroLugares(8);
    }
}