<?php
namespace Duodraco\Command;

use Duodraco\Foundation\Command\Command;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Version extends Command
{
    /**
     * @Route("/version")
     */
    public function __invoke(Request $request, array $attributes = []): Response
    {
        $response = $this->commandBus->handle($this);
        return new JsonResponse($response);
    }
}