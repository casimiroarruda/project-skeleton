<?php
namespace Duodraco\Service;

use Duodraco\Foundation\Command\Service;

class System implements Service
{
    public function __construct()
    {
    }

    public function getPHPVersion():string
    {
        return PHP_VERSION;
    }

    public function sum(int $a, int $b):int
    {
        return $a + $b;
    }
}