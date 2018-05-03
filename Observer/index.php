<?php

require_once('../autoloader.php');

$controleEstoqueSubject = new \Observer\ControleEstoqueSubject();

$controleRequisicaoCompraObserver = new \Observer\ControleRequisicoesCompraObserver();
$emailObserver = new \Observer\EmailObserver();

$controleEstoqueSubject->adicionarObserver($controleRequisicaoCompraObserver);
$controleEstoqueSubject->adicionarObserver($emailObserver);

$controleEstoqueSubject->notificarObservers(123);