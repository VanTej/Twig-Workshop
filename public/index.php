<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once __DIR__. '/../vendor/autoload.php';

$name = 'Vanessa';

echo $twig->render('hello.html.twig', ['name' => $name]);


