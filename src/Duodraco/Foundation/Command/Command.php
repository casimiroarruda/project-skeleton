<?php
namespace Duodraco\Foundation\Command;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class Command extends Controller
{
    /**
     * @var Service
     */
    protected $service;

    final public function go(Request $request, array $attributes = []) : Response
    {
        $this->service = $this->buildService($request->attributes->get("service"));
        return $this->execute($request, $attributes);
    }

    protected function buildService(string $serviceName): Service
    {
        $reflectionClass = new \ReflectionClass($serviceName);
        $service = $reflectionClass->newInstanceArgs([$this->container]);
        if($service instanceof Service){
            return $service;
        }
        throw new \Exception("Service not configured");
    }

    abstract public function execute(Request $request, array $attributes): Response;
}