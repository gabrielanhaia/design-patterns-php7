<?php
/**
 * Created by PhpStorm.
 * User: gabrielanhaia
 * Date: 16/03/18
 * Time: 14:15
 */

namespace Strategy;


class ComprimirZip extends CompressaoStrategy
{
    /**
     * @param string $caminhoArquivos
     * @return bool
     */
    public function comprimir(string $caminhoArquivos): bool
    {
        echo 'Arquivo comprimido no formato ".ZIP';

        return true;    }
}