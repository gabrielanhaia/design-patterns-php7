<?php

require_once('../autoloader.php');

$strategyRar = new \Strategy\ComprimirRar();
$strategyZip = new \Strategy\ComprimirZip();
$strategyTar = new \Strategy\ComprimirTar();

$compressaoContext = new \Strategy\CompressaoContext($strategyRar);

$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');
echo "\n";

$compressaoContext->setCompressaoStrategy($strategyZip);
$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');
echo "\n";

$compressaoContext->setCompressaoStrategy($strategyTar);
$compressaoContext->comprimir('/CAMINHO/ARQUIVOS');
echo "\n";

