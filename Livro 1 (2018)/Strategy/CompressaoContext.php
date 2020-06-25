<?php

namespace Strategy;

/**
 * Class CompressaoContext
 * @package Strategy
 */
class CompressaoContext
{
    /** @var CompressaoStrategy $compressaoStrategy Stretegy de compress�o de arquivos. */
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
     * M�todo respons�vel por executar a estrat�gia de compress�o.
     */
    public function comprimir(string $caminhoArquivo)
    {
        $this->compressaoStrategy->comprimir($caminhoArquivo);
    }
}