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
     * @param CompressaoStrategy $compressaoStrategy
     */
    public function setCompressaoStrategy(CompressaoStrategy $compressaoStrategy)
    {
        $this->compressaoStrategy = $compressaoStrategy;
    }
}