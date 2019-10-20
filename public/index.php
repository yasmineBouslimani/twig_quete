<?php

require_once ('../vendor/autoload.php');

use App\Wcs\Hello;

$hello = new Hello();

echo $hello->talk();
var_dump($hello);



