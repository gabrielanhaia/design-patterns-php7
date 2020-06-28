<?php

namespace Builder;

/**
 * Class FogueteProduct
 * @package Builder
 */
class FogueteProduct
{
    /** @var float $tanqueCombustivel */
    protected float $tanqueCombustivel;

    /** @var string $modelo */
    protected string $modelo;

    /** @var int $numeroMotores */
    protected int $numeroMotores;

    /** @var  int $numeroLugares */
    protected int $numeroLugares;

    /**
     * @return string
     */
    public function __toString(): string
    {
        $result = "Foguete model: {$this->getModelo()}\n";
        $result .= "Litros do tanque: {$this->getLitrosCombustivel()}\n";
        $result .= "Número de motores: {$this->getNumeroMotores()}\n";
        $result .= "Número de lugares: {$this->getNumeroLugares()}\n";

        return $result;
    }

    /**
     * @return float
     */
    public function getLitrosCombustivel(): float
    {
        return $this->litrosCombustivel;
    }

    /**
     * @param float $litrosCombustivel
     * @return FogueteProduct
     */
    public function setLitrosCombustivel(float $litrosCombustivel): FogueteProduct
    {
        $this->litrosCombustivel = $litrosCombustivel;
        return $this;
    }

    /**
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     * @return FogueteProduct
     */
    public function setModelo(string $modelo): FogueteProduct
    {
        $this->modelo = $modelo;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumeroMotores(): int
    {
        return $this->numeroMotores;
    }

    /**
     * @param int $numeroMotores
     * @return FogueteProduct
     */
    public function setNumeroMotores(int $numeroMotores): FogueteProduct
    {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumeroLugares(): int
    {
        return $this->numeroLugares;
    }

    /**
     * @param int $numeroLugares
     * @return FogueteProduct
     */
    public function setNumeroLugares(int $numeroLugares): FogueteProduct
    {
        $this->numeroLugares = $numeroLugares;
        return $this;
    }
}