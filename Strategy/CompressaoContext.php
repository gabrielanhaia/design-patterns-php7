<?php

namespace Strategy;

/**
 * Class CompressaoContext
 * @package Strategy
 */
class CompressaoContext
{
    /** @var CompressaoStrategy $compressaoStrategy Stretegy de compressão de arquivos. */
    private $compressaoStrategy;

    /**
     * CompressaoContext constructor.
     * @param CompressaoStrategy $compressaoStrategy
     */
    public function __construct(CompressaoStrategy $compressaoStrategy)
    {
        $this->compressaoStrategy = $compressaoStrategy;
    }

    /**
     * @param CompressaoStrategy $compressaoStrategy
     */
    public function setCompressaoStrategy(CompressaoStrategy $compressaoStrategy)
    {
        $this->compressaoStrategy = $compressaoStrategy;
    }

    /**
     * Método responsável por executar a estratégia de compressão.
     */
    public function comprimir(string $caminhoArquivo)
    {
        $this->compressaoStrategy->comprimir($caminhoArquivo);
    }
}