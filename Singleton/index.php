<?php

require_once('../autoloader.php');

$instanciaDoBancoDeDados = \Singleton\DatabaseSingleton::getInstance();

$segundaInstanciaDoBancoDeDados = \Singleton\DatabaseSingleton::getInstance();

if ($instanciaDoBancoDeDados === $segundaInstanciaDoBancoDeDados) {
    echo 'As instâncias são exatamente as mesmas!';
}