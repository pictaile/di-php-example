<?php
/**
 * The bootstrap file creates and returns the container.
 */
use DI\ContainerBuilder;
require __DIR__ . '/../vendor/autoload.php';
$config = require __DIR__ . '/config/config.php';
require __DIR__ . '/Container.php';


$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions($config);
Container::setContainer($containerBuilder->build());
