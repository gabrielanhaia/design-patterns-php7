<?php

require_once('../autoloader.php');

use Singleton\LogsSingleton;

$logsSingleton = LogsSingleton::obterInstancia();

print_r($logsSingleton->gravarLog(['test', 'fsaafs']));

die;
$instanciaDoBancoDeDados = \Singleton\DatabaseSingleton::getInstance();

$segundaInstanciaDoBancoDeDados = \Singleton\DatabaseSingleton::getInstance();

if ($instanciaDoBancoDeDados === $segundaInstanciaDoBancoDeDados) {
    echo 'As instâncias são exatamente as mesmas!';
}