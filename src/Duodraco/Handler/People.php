<?php

namespace Duodraco\Handler;

use Duodraco\Foundation\Command\Command;
use Duodraco\Foundation\Command\Handler;
use Duodraco\Foundation\Command\Message;
use Duodraco\Service\PeopleRepository;

class People implements Handler
{
    protected $provider;

    public function __construct(PeopleRepository $provider)
    {
        $this->provider = $provider;
    }

    public function handle(Command $command): Message
    {
        $data = $this->provider->findBeloved();
        return new Message($data);
    }
}