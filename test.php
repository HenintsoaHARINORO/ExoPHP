<?php
require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Initialize template engine https://twig.symfony.com/
$loader = new FilesystemLoader('templates');
$twig = new Environment($loader, [
    'cache' => 'cache/twig',
]);

if(isset($_POST['vala'])) {
     echo $nums=$_POST['vala'];

}
echo $twig->render('hello.html.twig', ['num' => $nums]);