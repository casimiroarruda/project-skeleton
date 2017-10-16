<?php

namespace Duodraco\Command;

use Duodraco\Foundation\Command\Command;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Sum extends Command
{
    /**
     * @Route("/sum/{a}/{b}",requirements={"a" = "\d+","b" = "\d+"})
     */
    public function __invoke(Request $request, array $attributes = []): Response
    {
        $a = $request->get('a');
        $b = $request->get('b');
        $response = $this->service->sum($a, $b);
        return new JsonResponse($response);
    }
}