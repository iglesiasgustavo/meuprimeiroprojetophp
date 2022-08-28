<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('nomedocanal');
$logger->pushhandler(new Streamhandler(__DIR__.'/App.log', Logger::DEBUG));

$logger->info('Este e um informativo');
$logger->warning('Esta e uma mensagem de aivso');
$logger->error('Esta e uma mensagem de erro');

$variable = array(1,17,"hello",null);
var_dump($variable);
