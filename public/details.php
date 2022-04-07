<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once __DIR__. '/../vendor/autoload.php';


echo $twig->render('details.html.twig');