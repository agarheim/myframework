<?php
declare(strict_types = 1);

use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

ini_set('display_errors', 'on');
//
chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

$request = ServerRequestFactory::fromGlobals();

$name = $request->getQueryParams()['name']??'Guest';

$response = (new HtmlResponse('Hello, '. $name .'!'))->withHeader('X-Developer','RoLu');

$emitter = new SapiEmitter();
$emitter->emit($response);