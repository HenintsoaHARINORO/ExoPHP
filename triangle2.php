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
    $comb=0;
    if ($a >= $b)
        $comb = factoriel($a) / (factoriel($b) * factoriel($a - $b));
    else
        echo "Maths Error";

    return $comb;
}
if(isset($_POST['number'])) {
    $c=$_POST["number"];
    $output=[];
        for ($j = 0; $j <= $c; $j++) {
            for ($i = 0; $i <= $c; $i++) {
                if ($j >= $i) {
                    $output[]=[
                        'a'=>' ',
                        'b'=>combinaison($i,$j),
                        'c'=>' '
                    ];
                }

            }
        }

}
echo $twig->render('triangle.html.twig', ['output' => $output]);