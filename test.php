<?php
require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Initialize template engine https://twig.symfony.com/
$loader = new FilesystemLoader('templates');
$twig = new Environment($loader, [
    'cache' => 'cache/twig',
]);
$num= $_GET['vala'];
if(isset($a)) {
    $i = 0;
    $res = 0;
    for (; $i < 11; $i++) {
        $res = $i * $a;
        echo " $i * $a = $res <br>";
    }
}
echo $twig->render('hello.html.twig', ['res' => $res] );