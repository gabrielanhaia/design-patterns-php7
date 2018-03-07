<?php

namespace Observer;

/**
 * Interface Observer
 * @package Observer
 */
interface Observer
{
    public function atualizado(string $codigo);
}