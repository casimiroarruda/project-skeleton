<?php

namespace Duodraco\Foundation\Command;

use League\Tactician\CommandBus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class Command extends Controller
{
    protected $commandBus;
    protected $request;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function getRequest():Request
    {
        return $this->request;
    }
    abstract public function __invoke(Request $request, array $attributes = []): Response;
}