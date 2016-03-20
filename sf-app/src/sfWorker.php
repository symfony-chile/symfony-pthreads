<?php

class SfWorker extends \Worker
{
    public function run() {
        require_once __DIR__ . '/../app/autoload.php';
    }

    public function start(int $options = NULL) {
        return parent::start(PTHREADS_INHERIT_NONE);
    }
}
