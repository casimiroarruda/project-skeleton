<?php

namespace Duodraco\Handler;

use Duodraco\Foundation\Command\{Command, Handler, Message};
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