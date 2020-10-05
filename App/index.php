<?php

use System\Application;

$app = Application::getInstance();

// pre($app);

$app->route->add('/', 'Home');



// Not Found Routes
$app->route->add('/404', 'NotFound');
$app->route->notFound('/404');