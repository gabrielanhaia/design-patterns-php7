<?php

namespace Strategy;

/**
 * Class ComprimirTar
 * @package Strategy
 */
class ComprimirTar implements CompressaoStrategy
{
    /**
     * @param string $caminhoArquivos
     * @return bool
     */
    public function comprimir(string $caminhoArquivos): bool
    {
        echo 'Arquivo comprimido no formato ".TAR';

        return true;    }
}