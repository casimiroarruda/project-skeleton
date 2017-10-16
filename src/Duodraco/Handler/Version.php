<?php
namespace Duodraco\Handler;

use Duodraco\Foundation\Command\Command;
use Duodraco\Foundation\Command\Handler;
use Duodraco\Foundation\Command\Message;
use Duodraco\Service\System;

class Version implements Handler
{    protected $provider;

    public function __construct(System $provider)
    {
        $this->provider = $provider;
    }
    public function handle(Command $command): Message
    {
        return new Message($this->provider->getPHPVersion());
    }

}