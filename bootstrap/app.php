<?php

require realpath(__DIR__.'/../vendor/autoload.php');

$app = new \Illuminate\Foundation\Application(realpath( __DIR__.'/../' ));


$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;