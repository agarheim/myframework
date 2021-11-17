<?php
declare(strict_types = 1);

use Laminas\Diactoros\Request;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\ServerRequestFactory;
ini_set('display_errors', 'on');
//
chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

$request = ServerRequestFactory::fromGlobals();

$name = $request->getQueryParams()['name']??'Guest';

