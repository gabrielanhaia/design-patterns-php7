<?php

require_once('../autoloader.php');

$decorator = new \Decorator\PersonagemDecorator(new \Decorator\Mago());
$decorator = new \Decorator\EspadaMagica($decorator);

echo $decorator->getAtaque();