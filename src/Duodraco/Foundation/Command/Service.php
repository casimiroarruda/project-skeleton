<?php
namespace Duodraco\Foundation\Command;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

abstract class Service
{
    use ContainerAwareTrait;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}