<?php

namespace Duodraco\Command;

use Duodraco\Foundation\Command\Command;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Main extends Command
{
    /**
     * @Route("/")
     */
    public function __invoke(Request $request, array $attributes = []): Response
    {
        $response = $this->service->findBeloved();
        return new JsonResponse($response);
    }
}