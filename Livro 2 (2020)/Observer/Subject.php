<?php

namespace Observer;

/**
 * Interface Subject
 *
 * @package Observer
 */
interface Subject
{
    /**
     * @param Observer $observer
     *
     * @return bool
     */
    public function adicionarObserver(Observer $observer): void;

    /**
     * @param Observer $observer
     *
     * @return bool
     */
    public function removerObserver(Observer $observer): bool;

    /**
     * @param string $codigoProduto
     *
     * @return bool
     */
    public function notificarObservers(string $codigoProduto): void;
}