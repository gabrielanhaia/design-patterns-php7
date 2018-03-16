<?php

namespace Strategy;

/**
 * Class ComprimirRar
 * @package Strategy
 */
class ComprimirRar implements CompressaoStrategy
{
    /**
     * @param string $caminhoArquivos
     * @return bool
     */
    public function comprimir(string $caminhoArquivos): bool
    {
        echo 'Arquivo comprimido no formato ".RAR';

        return true;
    }
}