<?php

require_once('../autoloader.php');

$texto = new \Memento\Texto();

$texto->escreverTexto("A");
$texto->escreverTexto("B");
$texto->escreverTexto("C");

echo $texto->retornarTexto();
echo "\n";

$texto->desfazerEscrita();
echo $texto->retornarTexto();
echo "\n";

$texto->desfazerEscrita();
echo $texto->retornarTexto();