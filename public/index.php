<?php

require '../vendor/autoload.php';

include '../src/Wcs/Hello.php';
include '../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';
use HelloWorld\SayHello;
$hello = new Hello();
echo $hello->talk() . '</br>';

$hello2 = new SayHello();
echo $hello2->world();