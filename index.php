<?php declare(strict_types=1);
require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Initialize template engine https://twig.symfony.com/
$loader = new FilesystemLoader('templates');
$twig = new Environment($loader, [
    'cache' => 'cache/twig',
]);

// Controller layer taking user input data
$name = $_GET['name'] ?? 'Fabien';

// Here you might put your logic

// Representation layer
echo $twig->render('index.html.twig', ['name' => $name]);
