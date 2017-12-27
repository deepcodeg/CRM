<?php
require '../Include/Config.php';
require '../Include/Functions.php';

// This file is generated by Composer
require_once dirname(__FILE__).'/../vendor/autoload.php';

use Slim\Container;
use Slim\App;
use ChurchCRM\Slim\Middleware\VersionMiddleware;
use ChurchCRM\Slim\Middleware\AuthMiddleware;

// Instantiate the app
$settings = require __DIR__.'/../Include/slim/settings.php';

$container = new Container;

// Add middleware to the application
$app = new App($container);

$app->add(new VersionMiddleware());
$app->add(new AuthMiddleware());

// Set up
require __DIR__.'/../Include/slim/error-handler.php';

// survey routes
require __DIR__.'/routes/surveys.php';

// definition routes
require __DIR__.'/routes/definitions.php';

// responses routes
require __DIR__.'/routes/responses.php';


// Run app
$app->run();