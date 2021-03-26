<?php
require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Initialize template engine https://twig.symfony.com/
$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);
if(isset($_POST['vala'])) {
    $nums=$_POST['vala'];
    $i = 0;
    $res = 0;
    for (; $i < 11; $i++) {
        $res = $i * $nums;
        echo " $i * $nums = $res <br>";
    }


}
echo $twig->render('hello.html.twig', ['ress' => $res]);