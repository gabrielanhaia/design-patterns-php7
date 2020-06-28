<?php

namespace Strategy;

/**
 * Class ComprimirZip
 *
 * @package Strategy
 */
class ComprimirZip extends CompressaoStrategy
{
    /**
     * @param string $caminhoArquivos
     *
     * @return bool
     */
    public function comprimir(string $caminhoArquivos): bool
    {
        echo 'Arquivo comprimido no formato ".ZIP"';

        return true;
    }
}