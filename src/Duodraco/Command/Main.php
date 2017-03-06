<?php
namespace Duodraco\Command;

use Duodraco\Foundation\Command\Command;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Main extends Command
{
    public function execute(Request $request, array $attributes): Response
    {
        $response = $this->service->peopleToFollow();
        return new JsonResponse($response);
    }
}