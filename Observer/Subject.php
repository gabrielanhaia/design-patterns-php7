<?php
/**
 * Created by PhpStorm.
 * User: gabrielanhaia
 * Date: 05/03/18
 * Time: 17:35
 */

namespace Observer;


interface Subject
{
    /**
     * @param Observer $observer
     * @return bool
     */
    public function adicionarObserver(Observer $observer);

    /**
     * @param Observer $observer
     * @return bool
     */
    public function removerObserver(Observer $observer): bool;

    /**
     * @return bool
     */
    public function notificarObservers();
}