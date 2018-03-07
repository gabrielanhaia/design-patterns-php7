<?php

namespace Observer;

/**
 * Class ControleEstoqueSubject
 * @package Observer
 */
class ControleEstoqueSubject implements Subject
{

    /**
     * @param Observer $observer
     * @return bool
     */
    public function adicionarObserver(Observer $observer)
    {
        // TODO: Implement adicionarObserver() method.
    }

    /**
     * @param Observer $observer
     * @return bool
     */
    public function removerObserver(Observer $observer): bool
    {
        // TODO: Implement removerObserver() method.
    }

    /**
     * @return bool
     */
    public function notificarObservers()
    {
        // TODO: Implement notificarObservers() method.
    }
}