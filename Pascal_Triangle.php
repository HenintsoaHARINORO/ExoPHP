<?php
require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Initialize template engine https://twig.symfony.com/
$loader = new FilesystemLoader('templates');
$twig = new Environment($loader);
function factoriel($a)
{
    $a=0;
    $i = 2;
    for ($fact = 1; $i <= $a; $i++) {
        $fact = $fact * $i;
    }
    return $fact;
}

function combinaison($a,$b)
{

    if ($a >= $b)
        $comb = factoriel($a) / (factoriel($b) * factoriel($a - $b));

    return $comb;
}
if(isset($_POST['number'])) {
    $c=$_POST["number"];
    $output=[];
    for ($j = 0; $j <= $c; $j++) {
        for ($i = 0; $i <= $c; $i++) {
            if ($j >= $i) {
                $v=combinaison($j,$i);
                $output[]=[
                    'b'=>$v
                ];

            }

        }

    }

}
echo $twig->render('Pascal.html.twig', ['output' => $output]);