<?php

require_once('../autoloader.php');

use Builder\FabricaFoguetesDirector;
use Builder\FogueteModeloIBuilder;
use Builder\FogueteModeloIIBuilder;

$montadoraDeFoguetesTestI = new FabricaFoguetesDirector(new FogueteModeloIBuilder());
$montadoraDeFoguetesTestII = new FabricaFoguetesDirector(new FogueteModeloIIBuilder());

$montadoraDeFoguetesTestI->construirFoguete();
echo $montadoraDeFoguetesTestI->getFoguete();

$montadoraDeFoguetesTestII->construirFoguete();
echo $montadoraDeFoguetesTestII->getFoguete();