<?php

require_once('../autoloader.php');

$impostosAlimentacao = new \TemplateMethod\ImpostosAlimentacao();

$impostosVestuario = new \TemplateMethod\ImpostosVestuario();

$impostosEletronicos = new \TemplateMethod\ImpostosEletronicos();

echo "Preço final de alimentação: " . $impostosAlimentacao->calculaImpostosProduto(10);
echo "\n";

echo "Preço final de vestuário: " . $impostosVestuario->calculaImpostosProduto(10);
echo "\n";

echo "Preço final de eletrônicos: " . $impostosEletronicos->calculaImpostosProduto(10);
echo "\n";