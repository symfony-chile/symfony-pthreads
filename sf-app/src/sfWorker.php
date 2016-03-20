<?php

class SfWorker extends \Worker
{
    public function start(int $options = NULL) { return parent::start(PTHREADS_INHERIT_NONE); }
}
