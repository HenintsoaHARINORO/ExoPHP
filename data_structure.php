<?php declare(strict_types=1);

require 'vendor/autoload.php';

use Twig\Environment;

$container = include '_bootstrap.php';
/**
 * Annotation below is used for type hint IDE.
 * Not the best way to do that but for not making it complex it's enough.
 * Later change it to DI container. When show how class works.
 * @var Environment $twig
 */
$twig = $container['twig'];

echo  $twig->render('data_structure.html.twig');


