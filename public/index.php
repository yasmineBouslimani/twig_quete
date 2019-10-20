<?php

require_once ('../vendor/autoload.php');

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();

echo $hello->talk();
var_dump($hello);

$bonjour = new SayHello();

echo $bonjour->world();






