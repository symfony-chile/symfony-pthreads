<?php

class sfJob extends \Threaded
{
    public function __construct($world) {
        $this->world = $world;
    }

    public function run() {
        require __DIR__ . '/../app/autoload.php';

        //Debug::enable();
        //include_once __DIR__.'/../var/bootstrap.php.cache';
        //require_once __DIR__ . '/../app/AppKernel.php';

        $kernel_thread = new \AppKernel('dev', true);
        $kernel_thread->boot();

        echo ucwords("hello " . $this->world) . PHP_EOL;

        $kernel_thread->shutdown();
    }

    public $world;
}
