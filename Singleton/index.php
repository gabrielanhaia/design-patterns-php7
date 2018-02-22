<?php

require_once('../autoloader.php');

use Singleton\LogsSingleton;

$logsSingleton = LogsSingleton::obterInstancia();

$logsSingleton->gravarLog(['test']);

$logsSingletonTeste = LogsSingleton::getInstance();

if ($logsSingletonTeste === $logsSingleton) {
    echo 'As instâncias são exatamente as mesmas!';
}