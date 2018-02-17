<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', \MODXDocs\Controllers\Home::class . ':get')->setName('home');
$app->get('/{version}/{language}/{path:.*}',\MODXDocs\Controllers\Doc::class . ':get')->setName('documentation');

