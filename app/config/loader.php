<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir
    )
);

$loader->registerNamespaces(array(
    'Phalcon' => __DIR__ . '/../../app/library/incubator/Library/Phalcon/',
    
));

$loader->register();

require __DIR__ . '/../../app/library/Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
