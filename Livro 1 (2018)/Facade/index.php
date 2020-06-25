<?php

require_once('../autoloader.php');

$bibliotecaFacade = new \Facade\BibliotecaFacade();

$codigoLivro = '123456';
$cpfCliente = '12345678998';

$efetuouRetirada = $bibliotecaFacade->efetuaRetirada($codigoLivro, $cpfCliente);

if ($efetuouRetirada) {
    $bibliotecaFacade->disparaMensagens($codigoLivro, $cpfCliente, 'CHAVE_API', 'SENHA_API');
}