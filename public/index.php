<?php
/**
 * Created by PhpStorm.
 * User: wilder13
 * Date: 09/04/18
 * Time: 11:54
 */

require '../src/Wcs/Hello.php';
require '../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';

$hello = new \App\Wcs\Hello();
$helloWorld = new \HelloWorld\SayHello();

$hello->talk();
$helloWorld->world();
