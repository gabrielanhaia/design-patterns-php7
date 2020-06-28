<?php

namespace Observer;

/**
 * Class ControleEstoqueSubject
 *
 * @package Observer
 */
class ControleEstoqueSubject implements Subject
{
    /** @var Observer[] $observers */
    private array $observers;

    public function atualizaEstoqueProduto(string $codigoProduto, int $novaQuantidade): bool
    {
        // Simula a atualização de estoque de um produto.

        if ($novaQuantidade == 0) {
            $this->notificarObservers($codigoProduto);
        }
    }

    /**
     * @param Observer $observer
     *
     * @return bool
     */
    public function adicionarObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @param Observer $observerRemover
     *
     * @return bool
     */
    public function removerObserver(Observer $observerRemover): bool
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $observerRemover) {
                unset($this->observers[$index]);
                return true;
            }
        }

        return false;
    }

    /**
     * @param string $codigoProduto
     *
     * @return bool|void
     */
    public function notificarObservers(string $codigoProduto): void
    {
        foreach ($this->observers as $observer) {
            $observer->atualizado($codigoProduto);
        }
    }
}