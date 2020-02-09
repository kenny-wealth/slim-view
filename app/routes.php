<?php
declare(strict_types=1);

use App\Application\Actions\AboutAction;
use App\Application\Actions\ContactAction;
use App\Application\Actions\IndexAction;
use App\Application\Actions\SearchAction;
use Slim\App;

return function (App $app) {
    $app->get('/', IndexAction::class);
    $app->get('/about', AboutAction::class);
    $app->get('/contact', ContactAction::class);
    $app->get('/search', SearchAction::class);
};
