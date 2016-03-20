<?php

class sfJob extends \Threaded
{
    public function __construct($world) {
        $this->world = $world;
    }

    public function run() {
        $kernel_thread = new \AppKernel('prod', false);
        $kernel_thread->boot();

        echo ucwords("hello " . $this->world) . PHP_EOL;

        $kernel_thread->shutdown();
    }

    public $world;
}
