<?php
namespace Duodraco\Command;

use Duodraco\Foundation\Command\Command;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Version extends Command
{
    public function execute(Request $request, array $attributes): Response
    {
        $response = $this->service->getPHPVersion();
        return new Response($response);
    }
}