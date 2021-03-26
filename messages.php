<?php
require 'vendor/autoload.php';

use Twig\Environment;

$container = include '_bootstrap.php';
/** @var Environment $twig */
$twig = $container['twig'];
$jsonPath = 'var/storage/messages.json';

/**
 * Get content file from path decode it to php array and return
 */
function getMessages(string $path):array
{
    $json = file_get_contents($path);
    return json_decode($json) ?? [];
}

/**
 * Convert message to json and save it back to file
 */
function saveMessages(string $path, array $messages):void
{
    $json = json_encode($messages);
    file_put_contents($path, $json);
}

// Load messages from storage
$messages = getMessages($jsonPath);

// if user have submited form add message and save it to file
if (isset($_POST['message'])) {
    $messages[] = $_POST['message'];
    saveMessages($jsonPath, $messages);
}

echo $twig->render('messages.html.twig', ['messages' => $messages] );