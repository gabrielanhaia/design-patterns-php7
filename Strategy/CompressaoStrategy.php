<?php

namespace Strategy;

/**
 * Class CompressaoStrategy
 * @package Strategy
 */
abstract class CompressaoStrategy
{
    /**
     * @param string $caminhoArquivos
     * @return bool
     */
    abstract public function comprimir(string $caminhoArquivos): bool;

    /**
     * Renomei arquivos a serem comprimidos em um ordem.
     */
    public function renomearArquivosEmOrdem()
    {
        echo 'Arquivos renomeados!';
    }
}