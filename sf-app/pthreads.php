<?php

umask(0000);

/**
 * @var Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__.'/app/autoload.php';

$pool = new Pool(16, \sfWorker::class);

while (@$i++ < 100) {
    $pool->submit(new \sfJob("world"));
}

$pool->shutdown();
