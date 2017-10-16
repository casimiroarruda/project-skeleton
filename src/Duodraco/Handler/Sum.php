<?php
namespace Duodraco\Handler;

use Duodraco\Foundation\Command\Command;
use Duodraco\Foundation\Command\Handler;
use Duodraco\Foundation\Command\Message;
use Duodraco\Service\System;

class Sum implements Handler
{    protected $provider;

    public function __construct(System $provider)
    {
        $this->provider = $provider;
    }
    public function handle(Command $command): Message
    {
        $a = $command->getRequest()->get('a');
        $b = $command->getRequest()->get('b');
        $sum = $this->provider->sum($a, $b);
        return new Message($sum);
    }

}