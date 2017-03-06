<?php
const BASE_PATH = __DIR__;
$loader = require __DIR__ . '/vendor/autoload.php';

use Duodraco\Foundation\Kernel;
use Symfony\Component\HttpFoundation\Request;

$kernel = new Kernel('prod', true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);