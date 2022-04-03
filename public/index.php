<?php

use App\Wcs\Hello;

require_once '../vendor/autoload.php';

$hello = new Hello;
echo $hello->talk();